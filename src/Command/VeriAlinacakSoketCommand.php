<?php
namespace App\Command;

use App\Server\VeriAlinacakSoketServer;
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
use React\EventLoop\Factory;
use React\Socket\SecureServer;
use React\Socket\Server;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

// TODO: CLASS ADINI WE DOSYA ADINI DEĞİŞTİRİNİZ
class VeriAlinacakSoketCommand extends ContainerAwareCommand
{

    /**
     * Configure a new Command Line
     */
    protected function configure()
    {
        $this
            ->setName('Veri:Alinacak:Soket:Server') // TODO: BURANIN ADINI DEĞİŞTİRİNİZ
            ->setDescription('Veri Alinacak Soket'); // TODO: BURANIN ADINI DEĞİŞTİRİNİZ
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $crt = $this->getContainer()->getParameter("socketCrt");
        $key = $this->getContainer()->getParameter("socketKey");

        $loop   = Factory::create();
        $webSock = new SecureServer(
            new Server('0.0.0.0:9000', $loop),
            $loop,
            array(
                'local_cert'        => $crt, // path to your cert
                'local_pk'          => $key, // path to your server private key
                'allow_self_signed' => false, // Allow self signed certs (should be false in production)
                'verify_peer' => false
            )
        );
        // Ratchet magic
        $webServer = new IoServer(
            new HttpServer(
                new WsServer(
                    // TODO: CLASS ADINI WE DOSYA ADINI DEĞİŞTİRDİĞİNİZDE BURAYIDA DEĞİŞTİRİNİZ
                    new VeriAlinacakSoketServer($this->getContainer())
                )
            ),
            $webSock
        );
        $loop->run();
    }
}
