<?php

namespace Pau\Seur;

use Pau\Seur\Model\Aggregate\LabelRequest;
use Pau\Seur\Request\SeurRequest;
use Pau\Seur\Service\StructureXmlRequest;

class SeurLabelClient
{

    private $user;
    private $password;
    private $brand;
    private $model;
    private $format;


    /**
     * SeurLabelClient constructor.
     * @param string $user
     * @param string $password
     * @param string $brand
     * @param string $model
     * @param string $format
     */
    public function __construct(
        string $user ,
        string $password,
        string $brand,
        string $model,
        string $format
    )
    {
        $this->user =   $user;
        $this->password =   $password;
        $this->brand =  $brand;
        $this->model =  $model;
        $this->format=  $format;
    }

    public function seurRequest(LabelRequest $label)
    {
        $seurRequest=new SeurRequest(
            $this->user,
            $this->password,
            $this->brand,
            $this->model,
            $this->format
            );

        $seurRequest->request($label);
    }

}