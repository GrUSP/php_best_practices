<?php
/*
 * Classe principale per il deploy delle applicazioni via rsync
 */
require_once 'phing/Task.php';

/**
 * Il task phing deve esporre i setter per gli attributi. In questo caso:
 * - destinazione
 * - sorgente
 * - dry_run
 * - ssh_key
 *
 * @author kea
 */
class Deploy extends Task {

    private $destinazione = null;
    private $sorgente = null;
    private $dry_run = true;
    private $ssh_key = null;
    private $opzioni = '-rlDczv ';

    public function setDestinazione($str) {
        $this->destinazione = $str;
    }

    public function setSorgente($str) {
        $this->sorgente = $str;
    }

    public function setDry_Run($str) {
        $this->dry_run = $str;
    }

    public function setSsh_Key($str) {
        $this->ssh_key = $str;
    }

    /**
     * Il metodo principale
     */
    public function main() {
        $this->parseDryRun();
        $this->parseSshKey();

        $cmd = $this->buildCommand();
        echo "Comando: ".$cmd."\n";

        $output = `$cmd`;
        echo $output;
    }

    public function buildCommand() {
        if (empty($this->sorgente) || empty($this->destinazione))
        {
            throw new Exception('Gli attributi sorgente e destinazione sono obbligatori.');
        }

        return "rsync ".$this->opzioni." ".escapeshellarg($this->sorgente)." ".escapeshellarg($this->destinazione);
    }

    public function parseDryRun() {
        if ((bool)$this->dry_run) {
            $this->opzioni.= '--dry-run ';
        }
    }

    public function parseSshKey() {
        if (!is_null($this->ssh_key)) {
            $this->opzioni.= '-e "ssh -i '.$this->ssh_key.'" ';
        }
    }
}
