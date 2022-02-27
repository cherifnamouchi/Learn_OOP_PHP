<?php

namespace Class;


/* class BasicPDF implements PDFDownloader, HTMLDownloader {

    public function __construct() {
        echo 'Basic PDF';
    }
    public function downloadPDF() : string {
        return 'telechargement fichier PDF';
    }

    public function downloadHTML() : string {
        return 'telechargement fichier HTML';
    }

    public function downloadJSON() : string {
        return 'telechargement fichier JSON';
    }
} */

class BasicPDF implements PDFDownloader {
    public function __construct() {
        echo 'Basic PDF';
    }
    public function downloadPDF(?int $size = null) : string {
        return 'telechargement fichier PDF';
    }

}