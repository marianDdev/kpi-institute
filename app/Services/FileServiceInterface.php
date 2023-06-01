<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\BinaryFileResponse;

interface FileServiceInterface
{
    public function download(string $path, string $name, array $headers): BinaryFileResponse;
}
