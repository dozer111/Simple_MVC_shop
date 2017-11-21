{extends file="../layout.tpl"}
{block name=body}
    <h1> This is CategoryController ====> indexAction<h1>
  <!--  <h2> Categories </h2>
    <pre></pre><br>
    <h2>PARAMS</h2>
-->
    <pre> {print_r($categories[$params[0]])}</pre>
    <h2>This is {$categories[$params[0]]['name']} category</h2>
    <table border="5" style="font-size: 50px" width="70%" align="center">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Weight</th>
        </tr>
        <tr>
            <td>{$categories[$params[0]]['id']}</td>
            <td>    {$categories[$params[0]]['name']}</td>
            <td>    {$categories[$params[0]]['weight']}
            </td>
        </tr>
    </table>
{/block}