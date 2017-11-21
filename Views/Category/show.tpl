{extends file="../layout.tpl"}
{block name=body}
    <h1> This is CategoryController ====> Show Action<h1>
    <!--  <h2> Categories </h2>
      <pre></pre><br>
      <h2>PARAMS</h2>
  -->

    <h2>This is {$categoryId} category</h2>
    <table border="5" style="font-size: 50px" width="70%" align="center">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Weight</th>
        </tr>
        <tr>
            <td>{$categories[$categoryId]['id']}</td>
            <td>    {$categories[$categoryId]['name']}</td>
            <td>    {$categories[$categoryId]['weight']}
            </td>
        </tr>
    </table>
{/block}