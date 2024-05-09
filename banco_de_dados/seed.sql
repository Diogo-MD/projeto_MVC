-- GrupoUsuario Padrão do Sistema
INSERT INTO GrupoUsuario (Nome, Descricao) 
VALUES	('Sistema', 'Grupo de Usuarios Responsável pelo Sistema'),
		('Administrador', 'Gerenciador de Perfis e Recursos do Sistema'),
        ('Generico', 'Grupo de Usuários Padrão do Sistema');
        
-- Usuário Padrão
INSERT INTO Usuario
(`NomeUsuario`, `Senha`, `Email`, `GrupoUsuarioID`, `Ativo`, `DataCriacao`, `DataAtualizacao`, `UsuarioAtualizacao`)
VALUES
('System', 'System@123', 'system@mail.com', 1, 1, current_timestamp(), current_timestamp(), null);

-- Permissões Padrão do Sistema
INSERT INTO Permissao (Nome, Descricao) 
VALUES	('Gerenciar Usuários', 'Permissão de Administrar os Papéis de um Usuário'),
		('Visualizar Produtos', 'Permissão de Visualizar Todos os Produtos'),
        ('Gerenciar Pedidos', 'Permissão de Alterar os Status de um Pedido');
        
-- Mapeamento Inicial de Permissões por Grupo
INSERT INTO PermissaoGrupo (PermissaoID, GrupoUsuarioID)
VALUES	(1, 1), (1, 2),
		(2, 1), (2, 2), (2, 3),
        (3, 2);
