<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* materialize/template/extension/module/photoswipe.twig */
class __TwigTemplate_655128ecbc7acbb18dabbe9e4d1673eb719fac68d5452622a0286a0a24b433a1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"slider-for center photo-swipe\" itemscope itemtype=\"http://schema.org/ImageGallery\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 3
            echo "\t<figure itemprop=\"associatedMedia\" itemscope itemtype=\"http://schema.org/ImageObject\">
\t\t<a href=\"";
            // line 4
            echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 4);
            echo "\" itemprop=\"contentUrl\" data-size=\"";
            echo ($context["data_size"] ?? null);
            echo "\">
\t\t\t<img id=\"";
            // line 5
            echo twig_get_attribute($this->env, $this->source, $context["image"], "zoom_id", [], "any", false, false, false, 5);
            echo "\" class=\"responsive-img lazyload\" src=\"";
            echo ($context["img_loader"] ?? null);
            echo "\" data-src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "preview", [], "any", false, false, false, 5);
            echo "\" itemprop=\"thumbnail\" title=\"";
            echo ($context["heading_title"] ?? null);
            echo "\" alt=\"";
            echo ($context["heading_title"] ?? null);
            echo "\">
\t\t</a>
\t\t<figcaption class=\"center\" itemprop=\"caption description\">";
            // line 7
            echo ($context["heading_title"] ?? null);
            echo "</figcaption>
\t</figure>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</div>
";
        // line 11
        if (($context["thumb_images"] ?? null)) {
            // line 12
            echo "<div class=\"slider-nav\">
\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 14
                echo "\t<img class=\"responsive-img lazyload\" src=\"";
                echo ($context["img_loader"] ?? null);
                echo "\" data-src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [], "any", false, false, false, 14);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\">
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "</div>
";
        }
        // line 18
        echo "
<div class=\"pswp\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
\t<div class=\"pswp__bg\"></div>
\t<div class=\"pswp__scroll-wrap\">
\t\t<div class=\"pswp__container\">
\t\t\t<div class=\"pswp__item\"></div>
\t\t\t<div class=\"pswp__item\"></div>
\t\t\t<div class=\"pswp__item\"></div>
\t\t</div>
\t\t<div class=\"pswp__ui pswp__ui--hidden\">
\t\t\t<div class=\"pswp__top-bar\">
\t\t\t\t<div class=\"pswp__counter\"></div>
\t\t\t\t<button class=\"pswp__button pswp__button--close\" title=\"";
        // line 30
        echo ($context["button_pswp_close"] ?? null);
        echo "\"></button>
\t\t\t\t<button class=\"pswp__button pswp__button--share\" title=\"";
        // line 31
        echo ($context["button_share"] ?? null);
        echo "\"></button>
\t\t\t\t<button class=\"pswp__button pswp__button--fs\" title=\"";
        // line 32
        echo ($context["button_pswp_toggle_fullscreen"] ?? null);
        echo "\"></button>
\t\t\t\t<button class=\"pswp__button pswp__button--zoom\" title=\"";
        // line 33
        echo ($context["button_pswp_zoom"] ?? null);
        echo "\"></button>
\t\t\t\t<div class=\"pswp__preloader\">
\t\t\t\t\t<div class=\"pswp__preloader__icn\">
\t\t\t\t\t\t<div class=\"pswp__preloader__cut\">
\t\t\t\t\t\t\t<div class=\"pswp__preloader__donut\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">
\t\t\t\t<div class=\"pswp__share-tooltip\"></div>
\t\t\t</div>
\t\t\t<button class=\"pswp__button pswp__button--arrow--left\" title=\"";
        // line 45
        echo ($context["button_pswp_prev"] ?? null);
        echo "\"></button>
\t\t\t<button class=\"pswp__button pswp__button--arrow--right\" title=\"";
        // line 46
        echo ($context["button_pswp_next"] ?? null);
        echo "\"></button>
\t\t\t<div class=\"pswp__caption\">
\t\t\t\t<div class=\"pswp__caption__center\"></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<script>
\tvar initPhotoSwipeFromDOM = function(gallerySelector) {
\t\tvar parseThumbnailElements = function(el) {
\t\t\tvar thumbElements = el.childNodes,
\t\t\tnumNodes = thumbElements.length,
\t\t\titems = [], figureEl, linkEl, size, item;
\t\t\tfor(var i = 0; i < numNodes; i++) {
\t\t\t\tfigureEl = thumbElements[i];
\t\t\t\tif(figureEl.nodeType !== 1) {
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t\tlinkEl = figureEl.children[0];
\t\t\t\tsize = linkEl.getAttribute('data-size').split('x');
\t\t\t\titem = {
\t\t\t\t\tsrc: linkEl.getAttribute('href'),
\t\t\t\t\tw: parseInt(size[0], 10),
\t\t\t\t\th: parseInt(size[1], 10)
\t\t\t\t};
\t\t\t\tif(figureEl.children.length > 1) {
\t\t\t\t\titem.title = figureEl.children[1].innerHTML;
\t\t\t\t}
\t\t\t\tif(linkEl.children.length > 0) {
\t\t\t\t\titem.msrc = linkEl.children[0].getAttribute('src');
\t\t\t\t}
\t\t\t\titem.el = figureEl;
\t\t\t\titems.push(item);
\t\t\t}
\t\t\treturn items;
\t\t};
\t\tvar closest = function closest(el, fn) {
\t\t\treturn el && (fn(el) ? el : closest(el.parentNode, fn));
\t\t};
\t\tvar onThumbnailsClick = function(e) {
\t\t\te = e || window.event;
\t\t\te.preventDefault ? e.preventDefault() : e.returnValue = false;
\t\t\tvar eTarget = e.target || e.srcElement;
\t\t\tvar clickedListItem = closest(eTarget, function(el) {
\t\t\t\treturn (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
\t\t\t});
\t\t\tif(!clickedListItem) {
\t\t\t\treturn;
\t\t\t}
\t\t\tvar clickedGallery = clickedListItem.parentNode,
\t\t\tchildNodes = clickedListItem.parentNode.childNodes,
\t\t\tnumChildNodes = childNodes.length,
\t\t\tnodeIndex = 0,
\t\t\tindex;
\t\t\tfor (var i = 0; i < numChildNodes; i++) {
\t\t\t\tif(childNodes[i].nodeType !== 1) {
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t\tif(childNodes[i] === clickedListItem) {
\t\t\t\t\tindex = nodeIndex;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t\tnodeIndex++;
\t\t\t}
\t\t\tif(index >= 0) {
\t\t\t\topenPhotoSwipe( index, clickedGallery );
\t\t\t}
\t\t\treturn false;
\t\t};
\t\tvar photoswipeParseHash = function() {
\t\t\tvar hash = window.location.hash.substring(1),
\t\t\tparams = {};
\t\t\tif(hash.length < 5) {
\t\t\t\treturn params;
\t\t\t}
\t\t\tvar vars = hash.split('&');
\t\t\tfor (var i = 0; i < vars.length; i++) {
\t\t\t\tif(!vars[i]) {
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t\tvar pair = vars[i].split('=');
\t\t\t\t\tif(pair.length < 2) {
\t\t\t\t\t\tcontinue;
\t\t\t\t\t}
\t\t\t\tparams[pair[0]] = pair[1];
\t\t\t}
\t\t\tif(params.gid) {
\t\t\t\tparams.gid = parseInt(params.gid, 10);
\t\t\t}
\t\t\treturn params;
\t\t};
\t\tvar openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
\t\t\tvar pswpElement = document.querySelectorAll('.pswp')[0],
\t\t\tgallery, options, items;
\t\t\titems = parseThumbnailElements(galleryElement);
\t\t\toptions = {
\t\t\t\tgalleryUID: galleryElement.getAttribute('data-pswp-uid'),
\t\t\t\tgetThumbBoundsFn: function(index) {
\t\t\t\t\tvar thumbnail = items[index].el.getElementsByTagName('img')[0],
\t\t\t\t\tpageYScroll = window.pageYOffset || document.documentElement.scrollTop,
\t\t\t\t\trect = thumbnail.getBoundingClientRect();
\t\t\t\t\treturn {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
\t\t\t\t}
\t\t\t};
\t\t\tif(fromURL) {
\t\t\t\tif(options.galleryPIDs) {
\t\t\t\t\tfor(var j = 0; j < items.length; j++) {
\t\t\t\t\t\tif(items[j].pid == index) {
\t\t\t\t\t\t\toptions.index = j;
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t} else {
\t\t\t\t\toptions.index = parseInt(index, 10) - 1;
\t\t\t\t}
\t\t\t} else {
\t\t\t\toptions.index = parseInt(index, 10);
\t\t\t}
\t\t\tif(isNaN(options.index)) {
\t\t\t\treturn;
\t\t\t}
\t\t\tif(disableAnimation) {
\t\t\t\toptions.showAnimationDuration = 0;
\t\t\t}
\t\t\tgallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
\t\t\tgallery.init();
\t\t};
\t\tvar galleryElements = document.querySelectorAll(gallerySelector);
\t\tfor(var i = 0, l = galleryElements.length; i < l; i++) {
\t\t\tgalleryElements[i].setAttribute('data-pswp-uid', i+1);
\t\t\tgalleryElements[i].onclick = onThumbnailsClick;
\t\t}
\t\tvar hashData = photoswipeParseHash();
\t\tif(hashData.pid && hashData.gid) {
\t\t\topenPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
\t\t}
\t};
\tinitPhotoSwipeFromDOM('.photo-swipe');

\tdocument.addEventListener(\"DOMContentLoaded\", function(event) {
\t\t\$('.slider-for').not('.slick-initialized').slick({
\t\t\tslidesToShow: 1,
\t\t\tslidesToScroll: 1,
\t\t\tarrows: true,
\t\t\tfade: true,
\t\t\tmobileFirst: true,
\t\t\tasNavFor: '.slider-nav'
\t\t});

\t\t";
        // line 196
        if (($context["thumb_images"] ?? null)) {
            // line 197
            echo "\t\t\$('.slider-nav').not('.slick-initialized').slick({
\t\t\tslidesToShow: 4,
\t\t\tslidesToScroll: 4,
\t\t\tasNavFor: '.slider-for',
\t\t\tcenterMode: false,
\t\t\tarrows: false,
\t\t\tinfinite: false,
\t\t\tfocusOnSelect: true
\t\t});
\t\t";
        }
        // line 207
        echo "
\t\t";
        // line 208
        if (($context["image_zoom"] ?? null)) {
            // line 209
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 210
                echo "\t\t\t\$('#";
                echo twig_get_attribute($this->env, $this->source, $context["image"], "zoom_id", [], "any", false, false, false, 210);
                echo "').wrap('<span style=\"display:inline-block\"></span>').css('display', 'block').parent().zoom({
\t\t\t\turl: '";
                // line 211
                echo twig_get_attribute($this->env, $this->source, $context["image"], "popup", [], "any", false, false, false, 211);
                echo "'
\t\t\t});
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "\t\t";
        }
        // line 215
        echo "\t});
</script>";
    }

    public function getTemplateName()
    {
        return "materialize/template/extension/module/photoswipe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 215,  342 => 214,  333 => 211,  328 => 210,  323 => 209,  321 => 208,  318 => 207,  306 => 197,  304 => 196,  151 => 46,  147 => 45,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  106 => 18,  102 => 16,  87 => 14,  83 => 13,  80 => 12,  78 => 11,  75 => 10,  66 => 7,  53 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "materialize/template/extension/module/photoswipe.twig", "");
    }
}
