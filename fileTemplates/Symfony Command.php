<?php #if (${NAMESPACE}) 
namespace ${NAMESPACE};
#end
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ${NAME} extends Command
{
    public function configure()
    {
        \$this->setName('${Command_Name}')
             ->setDescription('${Command_Description}');
    }
    
    public function execute(InputInterface \$input, OutputInterface \$output)
    {
        
    }
}