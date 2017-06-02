<?php


namespace AppBundle\Command;

use AppBundle\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class CsvImportCommand extends Command
{

    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();
        $this->em = $em;
    }

    protected function configure()
    {
        $this
            ->setName('csv:import')
            ->setDescription('Imports a mock CSV File');

    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('importing to db');

        $user = (new User())
            ->setUsername('Jan')
            ->setLastname('buurten')
            ->setEmail('jan@msn.com')
            ->setAge(45);

        $this->em->persist($user);
        $this->em->flush();

        $io->success('success');

    }

}