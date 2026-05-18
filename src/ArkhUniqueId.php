<?php

namespace ArkhTech;

class ArkhUniqueId
{
    private array $letters;
    private array $numbers;

    public function __construct()
    {
        $this->letters = str_split('abcdefghijklmnopqrstuvwxyz'
            . 'ABCDEFGHIJKLMNOPQRSTUVWXYZ');
        $this->numbers = str_split('123456789');
    }

    /**
     * GERANDO UM VALOR ALEÁTORIO APARTIR DE BINÁRIO
     */
    private function generateBin(): float|int
    {
        $key = '';
        foreach (array_rand($this->numbers, 4) as $val) {
            $key .= $val % 2;
        }
        if (bindec($key) > 9) {
            return bindec($key) % 5;
        } elseif (bindec($key) == 0) {
            $key = '';
            foreach (array_rand($this->numbers, 4) as $val) {
                $key .= $val % 2;
            }
            return bindec($key);
        }
        else
        {
            return bindec($key);
        }
    }


    /**
     * GERANDO UNIQUE ALPHA NUMERIC NECESSÁRIO PARA GERAR O TOKEN (UNIQUE)
     * @return string
     */
    private function generateUniqueAlphaNumeric(): string
    {
        $unique = '';
        for ($c = 0; $c < 4; $c++) {
            if ($c % 2 == 0) {
                $unique .= $this->letters[(time() * rand(0, 4)) % 48];
            } else {
                $unique .= $this->generateBin();
            }
        }
        return $unique;
    }

    /**
     * GERANDO UNIQUE NUMÉRICO NECESSÁRIO PARA GERAR O TOKEN (UNIQUE)
     * @return string
     */
    private function generateUniqueNumeric(): string
    {
        $unique = '';
        for ($c = 0; $c < 4; $c++) {
            $unique .= $this->generateBin();
        }
        return $unique;
    }

    private function generateUnique(bool $alphaNumeric = false): string
    {
        $unique = '';
        if($alphaNumeric)
        {
            for ($c = 0; $c < 4; $c++)
            {
                if ($c % 2 == 0)
                {
                    $unique .= $this->letters[(time() * rand(0, 4)) % 48];
                }
                else
                {
                    $unique .= $this->generateBin();
                }
            }
        }
        else
        {
            for ($c = 0; $c < 4; $c++)
            {
                $unique .= $this->generateBin();
            }
        }
        return $unique;

    }


    private function generateUniqueId(string $separate = '', int $charTotal = 4, bool $alphaNumeric = false): string
    {
        $unique_array = [];
        for ($d = 0; $d < ($charTotal / 4); $d++) {
            $unique = $this->generateUnique($alphaNumeric);
            $unique_array[] = $unique;
        }

        return implode($separate, $unique_array);
    }

    public function getUniqueId(string $separate = '', int $charTotal = 4, bool $alphaNumeric = false): string
    {
        return $this->generateUniqueId($separate, $charTotal, $alphaNumeric);
    }
}
