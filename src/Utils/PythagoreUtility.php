<?php

namespace App\Utils;

class PythagoreUtility
{
    public function display(): string
    {
        $html = "<table border='1' cellpadding='11' cellspacing='0'>";
        for ($i = 1; $i <= 10; $i++) {
            $html .= '<tr>';
            for ($k = 1; $k <= 10; $k++) {
                if ($k === $i) {
                    $html .= '<td> X </td>';
                }
                else {
                    $html .= '<td>' . ($i * $k) . '</td>';
                }
            }
            $html .= '</tr>';
        }
        $html .= '</table>';
        
        return $html;
    }
}
