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

                if (!$decrypted) {
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

        $this->dispatch('start-matrix-decrypt', targets: [
            'text1', 'text2', 'text3', 'text4', 'text5',
            'box1_Text1', 'box1_Text2', 'box1_Text3', 'box1_Text4', 'box1_Text5',
            'box2_Text1', 'box2_Text2', 'box2_Text3', 'box2_Text4', 'box2_Text5', 'box2_Text6', 'box2_Text7',
            'box3_Text1', 'box3_Text2', 'box3_Text3', 'box3_Text4',
            'box4_Text1', 'box4_Text2', 'box4_Text3', 'box4_Text4', 'box4_Text5', 'box4_Text6'
        ]);


    }






    public function render()
    {
        return view('livewire.app')->layout('layouts.app');
    }
}
