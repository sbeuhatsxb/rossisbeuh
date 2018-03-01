<?php

namespace AppBundle\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use AppBundle\Entity\User;


class UserFixtures extends Fixture implements FixtureInterface, ContainerAwareInterface, DependentFixtureInterface
{
    /**
    * @var ContainerInterface
    */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $i=0;
        $checkUniqEmail = [];


        $manager->getConnection()->getConfiguration()->setSQLLogger(null);
        $userManager = $this->container->get('fos_user.user_manager');



        $file = fopen(__DIR__."/sbeuhUsers.txt", "r");
        while($row=fgetcsv($file, 2048, $delimiter = "\n")){

            $row[0] = str_replace("'", "", $row[0]);
            $row[0] = str_replace(",", "", $row[0]);
            $row[0] = str_replace("Ã", "é", $row[0]);
            $row[0] = str_replace("©", "", $row[0]);
            $row[0] = str_replace("\N", "", $row[0]);


            $column = explode("\t", $row[0]);
            //vérifier si champ vide ou non dans le if suivant !
            if (!is_int(intval($column[0])) || empty($column[0]) || empty($column[16]) || in_array(strtolower($column[16]), $checkUniqEmail)){
                continue;
            } else {
                $checkUniqEmail[] = strtolower($column[16]);
                echo $i . " => USER => " . $column[2] . PHP_EOL;
                $user = $userManager->createUser();
                $user = new User();
                $user->setUserChangeId($column[0]);
                $user->setLabel($column[2]);
                $user->setUserCreationDate(new \DateTime($column[5]));
                $user->setModifDate(new \DateTime($column[6]));
                $user->setStatus($column[8]);
                $user->setFirstName($column[14]);
                $user->setLastName($column[15]);
                $user->setUsername($column[14] . "_" . $column[15] . $i);
                $user->setEmail($column[16]);
                $user->setPassword($column[19]);
                $user->setChangeGroups($column[20]);
                $user->setLastLogin(new \DateTime($column[21]));
                $user->setRoot($column[24]);
                $user->setDistrict($column[27]);
                $userManager->updateUser($user, true);
                $manager->persist($user);
                $i++;

                if ($i % 25 == 0){
                    $manager->flush();
                    $manager->clear();
                } else {
                    // echo var_export($column , TRUE) . PHP_EOL ;
                }
                $manager->flush();
            }
        }
    }

    public function getDependencies()
    {
        return array(
            ProductFixtures::class,
    );
    }
}
