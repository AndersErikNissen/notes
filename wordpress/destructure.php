$link = array(
    'url' => 'https://github.com',
    'label' => 'This is a link',
);

// Destructure for easier re-use

[
    'url' => $url,
    'label' => $label,    
] = $link;

echo 'This is the label:' . $label;
echo 'This is the url:' . $url;
echo 'and they are easy to use!'