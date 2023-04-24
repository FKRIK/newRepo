{extends file="master.tpl"}

{block name=title}Login Page{/block}

{block name=header}{/block}

{block name=main}
    <form action="../src/controller/teste.php" method="post">
        <div>
            <label for="txt_user">User</label><br>
            <input type="text" name="user" id="txt_user">
        </div>
        <div>
            <label for="txt_pw">Password</label><br>
            <input type="text" name="pw" id="txt_pw">
        </div>

        <input type="submit" value="Entrar" />
    </form>
{/block}

{block name=footer}{/block}