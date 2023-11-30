<?php
function mr_the_archive_pager($the_query)
{
    // 投稿が存在しない場合、ページャー作成をキャンセル
    if (!$the_query->have_posts()) {
        return;
    }

    $html = ''; // 変数を初期化

    $base_url = get_pagenum_link(1); // アーカイブページのURL

    // パラメータがついている場合に取得
    if ($the_query->is_singular()) {
        $url_param = '';
    } else {
        $url_param = (get_query_var('paged')) ? '?paged=' . get_query_var('paged') : '';
    }

    $max_page = intval($the_query->max_num_pages); // 最後のページ
    $page_nth = (get_query_var('paged')) ? get_query_var('paged') : 1; // 現在のページ数

    // 前
    if (($max_page - $page_nth) < 1) {
        if (2 - ($max_page - $page_nth) >= $page_nth) {
            $prev = $page_nth - 1;
        } else {
            $prev = 2 - ($max_page - $page_nth);
        }
    } else {
        if (1 >= $page_nth) {
            $prev = $page_nth - 1;
        } else {
            $prev = 1;
        }
    }

    // 後
    if (1 >= $page_nth) {
        if (2 - $prev >= $max_page - $page_nth) {
            $next = $max_page - $page_nth;
        } else {
            $next = 2 - $prev;
        }
    } else {
        if (1 >= $max_page - $page_nth) {
            $next = $max_page - $page_nth;
        } else {
            $next = 1;
        }
    }

    // 3ページ目かつ合計ページ数が3ではない時、「最初のページ＋...」出力
    $key_f = false;
    if (($prev + $page_nth) > 3 && $max_page !== 3) {
        $key_f = true;
    }

    // 最後のページ数から3番目のページの時点で、「...＋最後のページ」出力
    $key_l = false;
    if (($next + $page_nth) < $max_page) {
        $key_l = true;
    }

    // 合計ページ数が2以上でページャー出力
    if ($max_page !== 1) {

        $html .= '<ul class="l_flex l_justifyContentCenter c-pager">';

        // 最初のページ...
        if ($key_l) {
            $html .= '<li class="c-pager__dots">...</li>';
            $html .= '<li class="c-pager__li"><a href="' . esc_url($base_url . $url_param) . '">' . $max_page . '</a></li>';
        }

        // 前の数字
        while ($prev > 0) {
            $prev_nth = $page_nth - $prev;
            $html .= '<li class="c-pager__li"><a href="' . esc_url(get_pagenum_link($prev_nth) . $url_param) . '">' . $prev_nth . '</a></li>';
            $prev--;
        }

        // 現在
        $html .= '<li class="c-pager__li current">' . $page_nth . '</li>';

        // 後の数字
        $i = 1;
        while ($next > 0) {
            $next_nth = $page_nth + $i;
            $html .= '<li class="c-pager__li"><a href="' . esc_url(get_pagenum_link($next_nth) . $url_param) . '">' . $next_nth . '</a></li>';
            $next--;
            $i++;
        }

        // ...最後のページ
        if ($key_l) {
            $html .= '<li class="c-pager__dots">...</li>';
            $html .= '<li class="c-pager__li"><a href="' . esc_url(get_pagenum_link($max_page) . $url_param) . '">' . $max_page . '</a></li>';
        }

        $html .= '</ul>'; // 閉じる

    }

    echo $html;
}
;?>
