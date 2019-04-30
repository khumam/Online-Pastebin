<?php
require('view/header.php');
?>

<title>New Notepad</title>
</head>

<body>

    <?php include('view/navbar.php'); ?>

    <section>
        <div class="jumbotron jumbotron-fluid bg-whitee" style="height: 100%; width: 100%;">
            <div class="container py-5">
                <h2 class="text-center mt-5">New Notepad</h2>
                <form action="database/insert.php" method="post">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" placeholder="Judul Catatan" required>
                    </div>
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" name="author" class="form-control" id="author" placeholder="Nama Author" required>
                    </div>
                    <div class="form-group">
                        <label for="kode">Language</label>
                        <select class="form-control" id="kode" name="kode">
                            <option value="markup">Markup</option>
                            <option value="css">Css</option>
                            <option value="clike">Clike</option>
                            <option value="javascript">Javascript</option>
                            <option value="abap">Abap</option>
                            <option value="actionscript">Actionscript</option>
                            <option value="ada">Ada</option>
                            <option value="apacheconf">Apacheconf</option>
                            <option value="apl">Apl</option>
                            <option value="applescript">Applescript</option>
                            <option value="asciidoc">Asciidoc</option>
                            <option value="aspnet">Aspnet</option>
                            <option value="autoit">Autoit</option>
                            <option value="autohotkey">Autohotkey</option>
                            <option value="bash">Bash</option>
                            <option value="basic">Basic</option>
                            <option value="batch">Batch</option>
                            <option value="bison">Bison</option>
                            <option value="brainfuck">Brainfuck</option>
                            <option value="bro">Bro</option>
                            <option value="c">C</option>
                            <option value="csharp">Csharp</option>
                            <option value="cpp">Cpp</option>
                            <option value="coffeescript">Coffeescript</option>
                            <option value="crystal">Crystal</option>
                            <option value="css-extras">Css-extras</option>
                            <option value="d">D</option>
                            <option value="dart">Dart</option>
                            <option value="diff">Diff</option>
                            <option value="docker">Docker</option>
                            <option value="eiffel">Eiffel</option>
                            <option value="elixir">Elixir</option>
                            <option value="erlang">Erlang</option>
                            <option value="fsharp">Fsharp</option>
                            <option value="fortran">Fortran</option>
                            <option value="gherkin">Gherkin</option>
                            <option value="git">Git</option>
                            <option value="glsl">Glsl</option>
                            <option value="go">Go</option>
                            <option value="graphql">Graphql</option>
                            <option value="groovy">Groovy</option>
                            <option value="haml">Haml</option>
                            <option value="handlebars">Handlebars</option>
                            <option value="haskell">Haskell</option>
                            <option value="haxe">Haxe</option>
                            <option value="http">Http</option>
                            <!-- <option value="html">HTML</option> -->
                            <option value="icon">Icon</option>
                            <option value="inform7">Inform7</option>
                            <option value="ini">Ini</option>
                            <option value="j">J</option>
                            <option value="jade">Jade</option>
                            <option value="java">Java</option>
                            <option value="jolie">Jolie</option>
                            <option value="json">Json</option>
                            <option value="julia">Julia</option>
                            <option value="keyman">Keyman</option>
                            <option value="kotlin">Kotlin</option>
                            <option value="latex">Latex</option>
                            <option value="less">Less</option>
                            <option value="livescript">Livescript</option>
                            <option value="lolcode">Lolcode</option>
                            <option value="lua">Lua</option>
                            <option value="makefile">Makefile</option>
                            <option value="markdown">Markdown</option>
                            <option value="matlab">Matlab</option>
                            <option value="mel">Mel</option>
                            <option value="mizar">Mizar</option>
                            <option value="monkey">Monkey</option>
                            <option value="nasm">Nasm</option>
                            <option value="nginx">Nginx</option>
                            <option value="nim">Nim</option>
                            <option value="nix">Nix</option>
                            <option value="nsis">Nsis</option>
                            <option value="objectivec">Objectivec</option>
                            <option value="ocaml">Ocaml</option>
                            <option value="oz">Oz</option>
                            <option value="parigp">Parigp</option>
                            <option value="parser">Parser</option>
                            <option value="pascal">Pascal</option>
                            <option value="perl">Perl</option>
                            <option value="php">Php</option>
                            <option value="php-extras">Php-extras</option>
                            <option value="powershell">Powershell</option>
                            <option value="processing">Processing</option>
                            <option value="prolog">Prolog</option>
                            <option value="properties">Properties</option>
                            <option value="protobuf">Protobuf</option>
                            <option value="puppet">Puppet</option>
                            <option value="pure">Pure</option>
                            <option value="python">Python</option>
                            <option value="q">Q</option>
                            <option value="qore">Qore</option>
                            <option value="r">R</option>
                            <option value="jsx">Jsx</option>
                            <option value="reason">Reason</option>
                            <option value="rest">Rest</option>
                            <option value="rip">Rip</option>
                            <option value="roboconf">Roboconf</option>
                            <option value="ruby">Ruby</option>
                            <option value="rust">Rust</option>
                            <option value="sas">Sas</option>
                            <option value="sass">Sass</option>
                            <option value="scss">Scss</option>
                            <option value="scala">Scala</option>
                            <option value="scheme">Scheme</option>
                            <option value="smalltalk">Smalltalk</option>
                            <option value="smarty">Smarty</option>
                            <option value="sql">Sql</option>
                            <option value="stylus">Stylus</option>
                            <option value="swift">Swift</option>
                            <option value="tcl">Tcl</option>
                            <option value="textile">Textile</option>
                            <option value="twig">Twig</option>
                            <option value="typescript">Typescript</option>
                            <option value="verilog">Verilog</option>
                            <option value="vhdl">Vhdl</option>
                            <option value="vim">Vim</option>
                            <option value="wiki">Wiki</option>
                            <option value="xojo">Xojo</option>
                            <!-- <option value="xml">XML</option> -->
                            <option value="yaml">Yaml</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="isi">Konten</label>
                        <textarea class="form-control" id="isi" rows="12" name="isi"></textarea>
                    </div>
                    <div class="form-group">
                        <button name="insert" class="form-control form-control-lg btn btn-lg btn-success noRadius">Submit dan Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <?php
    require('view/footer.php');
    ?>