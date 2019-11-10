<?php

namespace App\Traits;


Trait XmlTrait
{
    public function xmlToObj($xml)
    {
        $object = \simplexml_load_string($xml);
        return $object;
    }

    public function xmlToJson($xml)
    {
        $object = $this->xmlToObj($xml);
        $json = json_encode($object);
        return $json;
    }

    public function xmlToArray($xml)
    {
        $json = $this->xmlToJson($xml);
        $arr = json_decode($json, true);
        return $arr;
    }

    public function arrayToXml($root, $array, $config = [])
    {
        $defaultConfig = [
            'returnType' => null,
            'stripLineBrakesIfString' => true,
            'removeXmlTagIfString' => true
        ];
        $config = array_merge($defaultConfig, $config);
        $object = new \SimpleXMLElement("<$root/>");
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $new_object = $object->addChild($key);
                $this->arrayToXml($new_object, $value, $config);
            } else {
                if ($key == (int)$key) {
                    $key = "$key";
                }
                $object->addChild($key, $value);
            }
        }

        if ($config['returnType'] === 'string') {
            $string = $object->asXML();
            if ($config['stripLineBrakesIfString']) {
                $string = preg_replace("/\r|\n/", "", $string);
            }
            if ($config['removeXmlTagIfString']) {
                $string = preg_replace('/<\?xml.*\?>/mi', "", $string);
            }
            return $string;
        }

        return $object;
    }
}