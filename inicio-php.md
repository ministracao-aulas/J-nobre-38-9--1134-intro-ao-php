1. Fundamentos Sintáticos e Estruturais
     _[já revisamos o básico de variáveis, constantes, arrays e funções]_

- **Operadores de Comparação Críticos:** A diferença crucial entre igualdade == e identidade === (tipo e valor).
- **Estruturas de Controle:** if/else, switch e match expression.

2. Manipulação de Dados (O Coração do PHP)

- **Arrays Associativos e Multidimensionais**
- **Funções de Array:**  array_map, array_filter, array_reduce e in_array.
- **Manipulação de Strings:** explode, implode, str_contains, str_replace e sprintf.
- **Coalescência Nula (null coalesce):** O uso dos operadores `??` e `??=`.

3. Organização de Código e Reutilização

** Escopo de Variáveis: Entender a diferença entre escopo local, global e estático dentro de funções.
** Funções Anônimas e Arrow Functions: Conceito de Closures, extremamente comum em rotas e coleções do Laravel.
** Inclusão de Arquivos: A diferença entre include, require, include_once e require_once (e por que quase não usamos isso manualmente hoje em dia graças ao Autoload).

4. Orientação a Objetos (OO) — Essencial para Laravel

** Classes, Objetos e Visibilidade: O que são propriedades e métodos public, protected e private.
** Constructor Promotion.
** Herança e Interfaces: "contrato" (Interface).
** Namespaces e Autoloading: Como o PHP localiza arquivos usando o padrão PSR-4. Sem entender Namespaces, ele vai se perder completamente nas pastas do Laravel.

5. Web Basics e Segurança (Sem Framework)

** Superglobais: $_GET, $_POST, $_SERVER, $_REQUEST, $_FILES, $_COOKIE e $_SESSION.
** Sanitização e Validação: filter_var() "nunca devemos confiar nos dados do usuário".
** Manipulação de Cabeçalhos: header().

6. Banco de Dados e Ecossistema modernizado

** PDO (PHP Data Objects): Como conectar a um banco de dados e, obrigatoriamente, o uso de Prepared Statements para evitar SQL Injection.
** Composer: Como inicializar um projeto, entender o composer.json e instalar uma biblioteca externa.
