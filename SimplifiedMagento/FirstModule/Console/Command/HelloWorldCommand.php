<?php
/**
 * Created by PhpStorm.
 * User: liyassoladogun
 * Date: 12/31/18
 * Time: 9:35 AM
 */

namespace SimplifiedMagento\FirstModule\Console\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class HelloWorldCommand extends Command
{

    protected function configure()
    {
        $this->setName('training:hello_world')
            ->setDescription('Prints hello world to screen.')
             ->setAliases(array('hw'));
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello World!');
    }
}