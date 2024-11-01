# Problema:
    - Você está desenvolvendo um sistema de gerenciamento de arquivos que precisa integrar com dois serviços de armazenamento em nuvem 
        diferentes: Google Drive e Dropbox. Cada serviço tem sua própria interface e métodos para fazer upload de arquivos. Seu objetivo é criar 
        uma interface unificada para o sistema de gerenciamento de arquivos, de modo que o código do cliente possa usar qualquer um dos serviços de 
        armazenamento de forma intercambiável.

# Requisitos:
    - Interface de Armazenamento: Crie uma interface CloudStorage com um método upload($file).
    - Implementações Específicas:
    - Google Drive: Crie uma classe GoogleDrive com um método uploadFile($file).
    - Dropbox: Crie uma classe Dropbox com um método uploadToDropbox($file).
# Adapter:
- Crie uma classe GoogleDriveAdapter que implementa a interface CloudStorage e adapta a classe GoogleDrive.
- Crie uma classe DropboxAdapter que implementa a interface CloudStorage e adapta a classe Dropbox.
- Cliente: Crie uma classe FileManager que aceita um objeto CloudStorage e chama o método upload($file).
# Tarefa:
- Implemente o código necessário para atender aos requisitos acima e teste o upload de arquivos usando ambos os serviços, Google Drive e Dropbox, através dos adaptadores criados. Boa sorte! Se precisar de mais alguma coisa, estou aqui para ajudar.