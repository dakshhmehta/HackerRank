<?php

class DrawingBook
{
    public function solve($totalPages, $goToPage)
    {
        // Mid Page Logic
        if (($totalPages - $goToPage) == $totalPages / 2) {
            if ($goToPage % 2 == 0) {
                return (int) round($goToPage / 2) - 1;
            }

            return (int) ($goToPage / 2);
        }

        if (($totalPages / 2) >= $goToPage) {
            // Open from front
            return (int) floor($goToPage / 2);
        }

        if ($totalPages % 2 == 0) {

            return (int) round(($totalPages - $goToPage) / 2);
        }

        return (int) (($totalPages - $goToPage) / 2);
    }
}
