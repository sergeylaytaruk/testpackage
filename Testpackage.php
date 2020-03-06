<?php

namespace Testpackage\Testpackage;

class Testpackage
{
    private $packageData = null;

    public function __construct()
    {
        $this->packageData = [
            'data' => [],
            'total' => 0,
        ];
    }

    public function getPackageData()
    {
        return $this->packageData;
    }

    public function generateData()
    {
        $this->packageData['data'] = array_fill(0, 10, 'banana');
        $this->packageData['total'] = count($this->packageData['data']);
    }
}
