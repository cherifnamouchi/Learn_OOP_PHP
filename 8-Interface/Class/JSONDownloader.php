<?php

namespace Class;

interface JSONDownloader {

    public function __construct();
    public function downloadHTML() : string;
}