<?php

namespace Class;

interface HTMLDownloader {

    public function __construct();
    public function downloadJSON() : string;
}