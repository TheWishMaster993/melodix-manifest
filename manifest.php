<?php
// Sirve el manifest.json evitando el bloqueo de InfinityFree
header('Content-Type: application/manifest+json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Cache-Control: public, max-age=86400');
echo file_get_contents(__DIR__ . '/manifest.json');
