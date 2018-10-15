<?php
namespace Xpressengine\plugins\TheNextMagazine\Components\WidgetSkins\ArticleList\Skins\Category;

use Xpressengine\Skin\GenericSkin;
use View;

class CategorySkin extends GenericSkin
{
    /**
     * @var string
     */
    protected static $path = 'the_next_magazine/Components/WidgetSkins/ArticleList/Skins/Category';

    static public function getPath()
    {
        return 'plugins/the_next_magazine';
    }

    /**
     * 위젯 설정 페이지에 출력할 폼을 출력한다.
     *
     * @param array $args 설정값
     *
     * @return string
     */
    public function renderSetting(array $args = [])
    {
        return $view = View::make(sprintf('%s/views/setting', static::$path), [
        ]);
    }
}
