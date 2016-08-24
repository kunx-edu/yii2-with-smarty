{$smarty.version}

{foreach $list as $row}
    {$row.name}{$row.age}<br />
{/foreach}

{php}
echo date('Y');
{/php}