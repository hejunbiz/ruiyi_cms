function copyCode(s)
{
	if (window.clipboardData) 
	{
		window.clipboardData.setData('text',s.val());
		alert('复制成功！\t\r请将已复制的代码粘贴到要加入微博秀功能的页面。');
	}
	else
	{
		alert('你的浏览器不支持脚本复制或你拒绝了浏览器安全确认。请尝试[Ctrl+C]复制代码并粘贴到要加入功能的页面。');
	}
}