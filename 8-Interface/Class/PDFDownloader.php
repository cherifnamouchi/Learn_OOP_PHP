<?php

namespace Class;

/* interface PDFDownloader extends JSONDownloader{

    public const SIZE = 0;
    public function __construct();
    public function downloadPDF() : string;
} */

interface PDFDownloader {

    public const SIZE = 0;
    public function __construct();
    public function downloadPDF(?int $size = null) : string;
}