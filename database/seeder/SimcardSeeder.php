<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SimcardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ini_set('memory_limit', '-1');

        DB::statement("INSERT INTO `mobilephones` (`id`, `areacode`, `telco`) VALUES
        (1, '813', 'smart'),
        (2, '907', 'smart'),
        (3, '908', 'smart'),
        (4, '909', 'smart'),
        (5, '910', 'smart'),
        (6, '911', 'smart'),
        (7, '912', 'smart'),
        (8, '913', 'smart'),
        (9, '914', 'smart'),
        (10, '918', 'smart'),
        (11, '919', 'smart'),
        (12, '920', 'smart'),
        (13, '921', 'smart'),
        (14, '928', 'smart'),
        (15, '929', 'smart'),
        (16, '930', 'smart'),
        (17, '938', 'smart'),
        (18, '939', 'smart'),
        (19, '946', 'smart'),
        (20, '947', 'smart'),
        (21, '948', 'smart'),
        (22, '949', 'smart'),
        (23, '950', 'smart'),
        (24, '951', 'smart'),
        (25, '961', 'smart'),
        (26, '963', 'smart'),
        (27, '968', 'smart'),
        (28, '970', 'smart'),
        (29, '981', 'smart'),
        (30, '989', 'smart'),
        (31, '992', 'smart'),
        (32, '998', 'smart'),
        (33, '999', 'smart'),
        (34, '817', 'globe'),
        (35, '905', 'globe'),
        (36, '906', 'globe'),
        (37, '915', 'globe'),
        (38, '916', 'globe'),
        (39, '917', 'globe'),
        (40, '926', 'globe'),
        (41, '927', 'globe'),
        (42, '935', 'globe'),
        (43, '936', 'globe'),
        (44, '937', 'globe'),
        (45, '945', 'globe'),
        (46, '953', 'globe'),
        (47, '954', 'globe'),
        (48, '955', 'globe'),
        (49, '956', 'globe'),
        (50, '965', 'globe'),
        (51, '966', 'globe'),
        (52, '967', 'globe'),
        (53, '975', 'globe'),
        (54, '976', 'globe'),
        (55, '977', 'globe'),
        (56, '978', 'globe'),
        (57, '979', 'globe'),
        (58, '994', 'globe'),
        (59, '995', 'globe'),
        (60, '996', 'globe'),
        (61, '997', 'globe'),
        (62, '991', 'ditto'),
        (63, '992', 'ditto'),
        (64, '993', 'ditto'),
        (65, '994', 'ditto'),
        (66, '895', 'ditto'),
        (67, '896', 'ditto'),
        (68, '897', 'ditto'),
        (69, '898', 'ditto'),
        (70, '922', 'sun'),
        (71, '923', 'sun'),
        (72, '924', 'sun'),
        (73, '925', 'sun'),
        (74, '931', 'sun'),
        (75, '932', 'sun'),
        (76, '933', 'sun'),
        (77, '934', 'sun'),
        (78, '940', 'sun'),
        (79, '941', 'sun'),
        (80, '942', 'sun'),
        (81, '943', 'sun'),
        (82, '944', 'sun'),
        (83, '973', 'sun'),
        (84, '974', 'sun');");
    }
}
