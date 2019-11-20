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

        $this->generateXml($array, $object);

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

    public function generateXml($array, &$node, $parent = null)
    {
        foreach ($array as $key => $value) {
            if (is_array($value)) {
                $split = explode('_', $key,2);

                $parentNode = null;
                if((is_array($split) && isset($split[1]) && isset($split[0]) && $split[0] === 'key')) {
                    $parentNode = $split[1];
                }

                if (!is_numeric($key)) {
                    if(!$parentNode) {
                        $subNode = $node->addChild("$key");
                    }
                    $theNode = isset($subNode) ? $subNode : $node;
                    $this->generateXml($value, $theNode, $parentNode);
                } else {
                    $childNode = isset($parent) ? $parent :"item$key";
                    $subNode = $node->addChild($childNode);
                    $this->generateXml($value, $subNode);
                }
            } else {
                $node->addChild("$key", htmlspecialchars("$value"));
            }
        }
    }
}