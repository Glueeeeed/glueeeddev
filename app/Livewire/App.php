<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use phpseclib3\Crypt\AES;
use Livewire\Component;

class App extends Component
{

    public array $data = [];
    public bool $decrypted = false;


    public function mount(): void
    {
        if (empty($this->data) && $this->decrypted === false) {
            $this->encryptData();
        }
    }


    public function encryptData(): void
    {
        $this->decrypted = false;
        $key = config('auth.aesKey.key');
        $iv  = config('auth.aesKey.iv');

        $encrypted = [];

        foreach (config('services.websiteData') as $text => $value) {
            $cipher = new AES('cbc');
            $cipher->setKey(base64_decode($key));
            $cipher->setIV(base64_decode($iv));
            $encrypted[$text] = base64_encode($cipher->encrypt($value));
        }

        $this->data = $encrypted;
    }

    public function decryptData(): void
    {
        $this->decrypted = true;
        $key = config('auth.aesKey.key');
        $iv  = config('auth.aesKey.iv');

        $decryptedData = [];

        foreach ($this->data as $text => $value) {
            try {
                $cipher = new AES('cbc');
                $cipher->setKey(base64_decode($key));
                $cipher->setIV(base64_decode($iv));
                $decrypted = $cipher->decrypt(base64_decode($value));

                if ($decrypted === false || $decrypted === null) {
                    Log::warning("Decrypt failed for key: {$text}");
                    $decrypted = '';
                }

                $decryptedData[$text] = $decrypted;
            } catch (\Throwable $e) {
                Log::error("Decrypt exception for {$text}: " . $e->getMessage());
                $decryptedData[$text] = '';
            }
        }

        $this->data = $decryptedData;
    }




    public function render()
    {
        return view('livewire.app')->layout('layouts.app');
    }
}
