<?php

/**
 *    Copyright 2015-2017 ppy Pty. Ltd.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'required' => '需要 :attribute.',

    'beatmap_discussion_post' => [
        'first_post' => '无法删除第一个提交.',
    ],

    'forum' => [
        'feature_vote' => [
            'not_feature_topic' => '只能投票给特性请求.',
            'not_enough_feature_votes' => '票数不足.',
        ],

        'poll_vote' => [
            'invalid' => '指定的选项无效.',
        ],

        'topic_poll' => [
            'duplicate_options' => 'Duplicated option is not allowed.',
            'invalid_max_options' => 'Option per user may not exceed the number of available options.',
            'minimum_one_selection' => 'A minimum of one option per user is required.',
            'minimum_two_options' => 'Need at least two options.',
            'too_many_options' => 'Exceeded maximum number of allowed options.',
        ],

        'topic_vote' => [
            'too_many' => 'Selected more options than allowed.',
        ],
    ],
];
