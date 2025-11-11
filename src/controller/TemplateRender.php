<?php
namespace Controller;

use League\Plates\Engine;
use League\Plates\Extension\Asset;
use League\Plates\Template\Template;

/**
 * Classe responsável por gerenciar o sistema de templates (Plates).
 * Implementa Singleton para evitar múltiplas instâncias.
 */
class TemplateRender {
    
    /** @var TemplateRender|null Instância única (Singleton) */
    private static ?TemplateRender $instance = null;

    /** @var Engine|null Instância do motor de templates Plates */
    private ?Engine $tlp = null;

    /** @var array Lista de pastas adicionais para organizar views */
    private array $tlp_add_folders = [
        'layouts'    => __DIR__ . '/../view/layouts',
        'pages' => __DIR__ . '/../view/pages',
        'components' => __DIR__ . '/../view/components',
        // 'partials'   => __DIR__ . '/../views/partials',
        // 'components' => __DIR__ . '/../views/components',
        // 'emails'     => __DIR__ . '/../views/emails',
    ];

    /**
     * Construtor privado para configurar o Plates.
     * Define a pasta base de views, adiciona extensões e pastas adicionais.
     */
    private function __construct($extension = 'php') {
        // Inicializa o motor de templates apontando para a pasta principal de views
        $this->tlp = new Engine(directory: __DIR__ . '/../view', fileExtension: $extension);

        // Adiciona extensão para lidar com assets (CSS, JS, imagens)
        $this->tlp->loadExtension(extension: new Asset(path: __BASE__, filenameMethod: false));

        // Registra pastas adicionais
        foreach ($this->tlp_add_folders as $name => $path) {
            $this->tlp->addFolder(name: $name, directory: $path);
        }
    }

    /**
     * Retorna a instância única da classe (Singleton).
     * 
     * @return TemplateRender
     */
    public static function run(): TemplateRender {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * Cria e retorna um objeto de template sem renderizar imediatamente.
     * Útil para manipulação antes de exibir.
     * 
     * @param string $template Nome do template
     * @param array  $data     Dados a serem passados para a view
     * @return Template
     */
    public function getMake(string $template, array $data = []): Template {
        return $this->tlp->make(name: $template, data: $data);
    }

    /**
     * Renderiza diretamente o template e exibe o resultado.
     * 
     * @param string $template Nome do template
     * @param array  $data     Dados a serem passados para a view
     */
    public function render(string $template, array $data = []): void {
        echo $this->tlp->render(name: $template, data: $data);
    }

    /**
     * Exibe um objeto de template criado com getMake().
     * 
     * @param Template $template Objeto de template pronto
     */
    public function renderEcho(Template $template): void {
        echo $template;
    }

    /**
     * Cria um template com make() e já renderiza em uma chamada só.
     * 
     * @param string $template Nome do template
     * @param array  $data     Dados a serem passados para a view
     */
    public function renderMake(string $template, array $data = []): void {
        $tpl = $this->tlp->make(name: $template, data: $data);
        echo $tpl;
    }

    /**
     * Adiciona uma nova pasta ao resgistro de rota.
     * @param string $folde Nome da pasta
     * @param string $dir Diretório da pasta
     */
    public function addFolder(string $folde, string $dir): void{
        $this->tlp->addFolder(name: $folde, directory: $dir);
    }

    /**
     * Registra uma função personalizada no sistema
     * @param string $name Nome da função para utilziar
     * @param callable $function função personalizada
     */
    public function addFunction(string $name, callable $function): void{
        $this->tlp->registerFunction(name: $name, callback: $function);
    }
}
?>