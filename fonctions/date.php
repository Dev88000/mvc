<?php
     // formatage de la date
     function formatDateFR($date) {
        setlocale(LC_TIME, 'fr_FR.UTF-8');
        return strftime("%d/%m/%y", strtotime($date));
    }
?>