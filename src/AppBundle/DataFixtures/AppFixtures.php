<?php

namespace AppBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Product;



class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $i=0;
        $manager->getConnection()->getConfiguration()->setSQLLogger(null);

        $file = fopen(__DIR__."/sbeuh2.txt", "r");
        while($row=fgetcsv($file, 2048, $delimiter = "\n")){


            $row[0] = str_replace("'", "", $row[0]);
            $row[0] = str_replace(",", "@", $row[0]);





            $column = explode("\t", $row[0]);
            // echo $i . " => " . $column[21] . ' ' . $column[2] . PHP_EOL;
            if($column[0] === "document_id") continue;
            if (isset($column[21])) {
                $product = new Product();
                $product->setRefId($column[0]);
                $product->setLabel($column[2]);
                $product->setCodereference($column[21]);
                $product->setArticleid($column[22]);
                $product->setCodesku($column[29]);
                $product->setKititem($column[34]);
                $product->setDeclinedproduct($column[35]);
                $product->setIndexindeclinedproduct($column[36]);
                $product->setAxe1($column[37]);
                $product->setAxe2($column[38]);
                $product->setAxe3($column[39]);
                $product->setLabelforurl($column[43]);
                $product->setColor($column[45]);
                $product->setColororder($column[46]);
                $product->setSize($column[47]);
                $product->setSizeorder($column[48]);
                $product->setCodeean($column[49]);
                $product->setAccessfilter($column[51]);
                $product->setCategoryid($column[52]);
                $product->setCategory($column[53]);
                $product->setProducttype($column[54]);
                $product->setGender($column[55]);
                $product->setMarketingprogram($column[56]);
                $product->setPosition($column[57]);
                $product->setSeason($column[58]);
                $product->setOpenedkititem($column[59]);
                $manager->persist($product);
                $i++;
                if ($i % 25 == 0){
                    $manager->flush();
                    $manager->clear();
                }
            } else {
                echo var_export($column , TRUE) . PHP_EOL ;
            }
            $manager->flush();
        }
    }
}
