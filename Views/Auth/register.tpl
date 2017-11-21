{extends file="../layout.tpl"}
{block name=title}REGISTER {/block}
{block name=body}
    <form class="form-inline" action="/auth/register/" method="POST">
        <div class="form-group">
            <label class="sr-only" for="login">Email address</label>
            <input type="text" class="form-control" id="login" placeholder="Email" name="login">
        </div>
        <div class="form-group">
            <label class="sr-only" for="pass">Password</label>
            <input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Do it
            </label>
        </div>
        <button type="submit" class="btn btn-default">Sign in</button>
    </form>

{/block}