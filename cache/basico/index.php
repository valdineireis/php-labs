<?php

class Cache
{
	private $cache;

	public function setVar($nome, $valor) {
		$this->readCache();
		$this->cache->$nome = $valor;
		$this->saveCache();
	}

	public function getVar($nome) {
		$this->readCache();

		// implementar verificação se a variável existe.
		return $this->cache->$nome;
	}

	private function readCache() {
		$this->cache = new stdClass();
		if (file_exists('cache.cache')) {
			$this->cache = json_decode(file_get_contents('cache.cache'));
		}
	}

	private function saveCache() {
		file_put_contents("cache.cache", json_encode($this->cache));
	}
}

$cache = new Cache();
// $cache->setVar("nome", "Valdinei");
// $cache->setVar("idade", 27);

echo "Meu nome eh: ".$cache->getVar("nome");
echo "<br>";
echo "Idade: ".$cache->getVar("idade");
