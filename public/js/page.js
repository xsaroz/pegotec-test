$(document).ready(function () {
	$('input[name=title]').change(function () {
		var pageTitle = $(this).val();
		console.log(pageTitle);
		let slug = convertToSlug(pageTitle);
		$('input[name=slug]').val(slug)
	});
});

function convertToSlug(pageTitle)
{
    return pageTitle
        .toLowerCase()
        .replace(/ /g,'-')
        .replace(/[^\w-]+/g,'')
        ;
}