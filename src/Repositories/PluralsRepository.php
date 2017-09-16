<?php
namespace hollanbo\LaravelPoeditor;


class PluralsRepository {
    private $plurals_bckp = [
        'ach' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'af' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'ak' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'am' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'an' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'anp' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'ar' => [
            'nplurals' => 6,
            'plural' => '(n==0 ? 0 : n==1 ? 1 : n==2 ? 2 : n%100>=3 && n%100<=10 ? 3 : n%100>=11 ? 4 : 5)',
            'header' => 'Plural-Forms: nplurals=6; plural=(n==0 ? 0 : n==1 ? 1 : n==2 ? 2 : n%100>=3 && n%100<=10 ? 3 : n%100>=11 ? 4 : 5);\n',
        ],
        'arn' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'as' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'ast' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'ay' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'az' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'be' => [
            'nplurals' => 3,
            'plural' => '(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)',
            'header' => 'Plural-Forms: nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);\n',
        ],
        'bg' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'bn' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'bo' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'br' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'brx' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'bs' => [
            'nplurals' => 3,
            'plural' => '(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)',
            'header' => 'Plural-Forms: nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);\n',
        ],
        'ca' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'cgg' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'cs' => [
            'nplurals' => 3,
            'plural' => '(n==1) ? 0 : (n>=2 && n<=4) ? 1 : 2',
            'header' => 'Plural-Forms: nplurals=3; plural=(n==1) ? 0 : (n>=2 && n<=4) ? 1 : 2;\n',
        ],
        'csb' => [
            'nplurals' => 3,
            'plural' => '(n==1) ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2',
            'header' => 'Plural-Forms: nplurals=3; plural=(n==1) ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2;\n',
        ],
        'cy' => [
            'nplurals' => 4,
            'plural' => '(n==1) ? 0 : (n==2) ? 1 : (n != 8 && n != 11) ? 2 : 3',
            'header' => 'Plural-Forms: nplurals=4; plural=(n==1) ? 0 : (n==2) ? 1 : (n != 8 && n != 11) ? 2 : 3;\n',
        ],
        'da' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'de' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'doi' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'dz' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'el' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'en' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'eo' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'es' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'es_AR' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'et' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'eu' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'fa' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'ff' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'fi' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'fil' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'fo' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'fr' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'fur' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'fy' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'ga' => [
            'nplurals' => 5,
            'plural' => 'n==1 ? 0 : n==2 ? 1 : (n>2 && n<7) ? 2 :(n>6 && n<11) ? 3 : 4',
            'header' => 'Plural-Forms: nplurals=5; plural=n==1 ? 0 : n==2 ? 1 : (n>2 && n<7) ? 2 :(n>6 && n<11) ? 3 : 4;\n',
        ],
        'gd' => [
            'nplurals' => 4,
            'plural' => '(n==1 || n==11) ? 0 : (n==2 || n==12) ? 1 : (n > 2 && n < 20) ? 2 : 3',
            'header' => 'Plural-Forms: nplurals=4; plural=(n==1 || n==11) ? 0 : (n==2 || n==12) ? 1 : (n > 2 && n < 20) ? 2 : 3;\n',
        ],
        'gl' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'gu' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'gun' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'ha' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'he' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'hi' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'hne' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'hr' => [
            'nplurals' => 3,
            'plural' => '(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)',
            'header' => 'Plural-Forms: nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);\n',
        ],
        'hu' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'hy' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'ia' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'id' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'is' => [
            'nplurals' => 2,
            'plural' => '(n%10!=1 || n%100==11)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n%10!=1 || n%100==11);\n',
        ],
        'it' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'ja' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'jbo' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'jv' => [
            'nplurals' => 2,
            'plural' => '(n != 0)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 0);\n',
        ],
        'ka' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'kk' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'kl' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'km' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'kn' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'ko' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'ku' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'kw' => [
            'nplurals' => 4,
            'plural' => '(n==1) ? 0 : (n==2) ? 1 : (n == 3) ? 2 : 3',
            'header' => 'Plural-Forms: nplurals=4; plural=(n==1) ? 0 : (n==2) ? 1 : (n == 3) ? 2 : 3;\n',
        ],
        'ky' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'lb' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'ln' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'lo' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'lt' => [
            'nplurals' => 3,
            'plural' => '(n%10==1 && n%100!=11 ? 0 : n%10>=2 && (n%100<10 || n%100>=20) ? 1 : 2)',
            'header' => 'Plural-Forms: nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && (n%100<10 || n%100>=20) ? 1 : 2);\n',
        ],
        'lv' => [
            'nplurals' => 3,
            'plural' => '(n%10==1 && n%100!=11 ? 0 : n != 0 ? 1 : 2)',
            'header' => 'Plural-Forms: nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n != 0 ? 1 : 2);\n',
        ],
        'mai' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'me' => [
            'nplurals' => 3,
            'plural' => 'n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2',
            'header' => 'Plural-Forms: nplurals=3; plural=n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2;\n',
        ],
        'mfe' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'mg' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'mi' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'ml' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'mn' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'mni' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'mnk' => [
            'nplurals' => 3,
            'plural' => '(n==0 ? 0 : n==1 ? 1 : 2)',
            'header' => 'Plural-Forms: nplurals=3; plural=(n==0 ? 0 : n==1 ? 1 : 2);\n',
        ],
        'mr' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'ms' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'mt' => [
            'nplurals' => 4,
            'plural' => '(n==1 ? 0 : n==0 || ( n%100>1 && n%100<11) ? 1 : (n%100>10 && n%100<20 ) ? 2 : 3)',
            'header' => 'Plural-Forms: nplurals=4; plural=(n==1 ? 0 : n==0 || ( n%100>1 && n%100<11) ? 1 : (n%100>10 && n%100<20 ) ? 2 : 3);\n',
        ],
        'my' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'nah' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'nap' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'nb' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'ne' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'nl' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'nn' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'no' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'nso' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'oc' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'or' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'pa' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'pap' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'pl' => [
            'nplurals' => 3,
            'plural' => '(n==1 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)',
            'header' => 'Plural-Forms: nplurals=3; plural=(n==1 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);\n',
        ],
        'pms' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'ps' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'pt' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'pt_BR' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'rm' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'ro' => [
            'nplurals' => 3,
            'plural' => '(n==1 ? 0 : (n==0 || (n%100 > 0 && n%100 < 20)) ? 1 : 2)',
            'header' => 'Plural-Forms: nplurals=3; plural=(n==1 ? 0 : (n==0 || (n%100 > 0 && n%100 < 20)) ? 1 : 2);\n',
        ],
        'ru' => [
            'nplurals' => 3,
            'plural' => '(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)',
            'header' => 'Plural-Forms: nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);\n',
        ],
        'rw' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'sah' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'sat' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'sco' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'sd' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'se' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'si' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'sk' => [
            'nplurals' => 3,
            'plural' => '(n==1) ? 0 : (n>=2 && n<=4) ? 1 : 2',
            'header' => 'Plural-Forms: nplurals=3; plural=(n==1) ? 0 : (n>=2 && n<=4) ? 1 : 2;\n',
        ],
        'sl' => [
            'nplurals' => 4,
            'plural' => '(n%100==1 ? 0 : n%100==2 ? 1 : n%100==3 || n%100==4 ? 2 : 3)',
            'header' => 'Plural-Forms: nplurals=4; plural=(n%100==1 ? 0 : n%100==2 ? 1 : n%100==3 || n%100==4 ? 2 : 3);\n',
        ],
        'so' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'son' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'sq' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'sr' => [
            'nplurals' => 3,
            'plural' => '(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)',
            'header' => 'Plural-Forms: nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);\n',
        ],
        'su' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'sv' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'sw' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'ta' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'te' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'tg' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'th' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'ti' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'tk' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'tr' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'tt' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'ug' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'uk' => [
            'nplurals' => 3,
            'plural' => '(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2)',
            'header' => 'Plural-Forms: nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);\n',
        ],
        'ur' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'uz' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'vi' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'wa' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ],
        'wo' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'yo' => [
            'nplurals' => 2,
            'plural' => '(n != 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\n',
        ],
        'zh' => [
            'nplurals' => 1,
            'plural' => '0',
            'header' => 'Plural-Forms: nplurals=1; plural=0;\n',
        ],
        'zh' => [
            'nplurals' => 2,
            'plural' => '(n > 1)',
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\n',
        ]
    ];

    private $plurals = [
        'ach' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'af' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'ak' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'am' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'an' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'anp' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'ar' =>  [
            'header' => 'Plural-Forms: nplurals=6; plural=(n==0 ? 0 : n==1 ? 1 : n==2 ? 2 : n%100>=3 && n%100<=10 ? 3 : n%100>=11 ? 4 : 5);\\n',
            'forms' =>  [
                1 =>  [
                   0 => 1,
                ],
                2 =>  [
                   0 => 2,
                ],
                3 =>  [
                   0 => 3,
                   1 => 4,
                   2 => 5,
                   3 => 6,
                   4 => 7,
                ],
                4 =>  [
                   0 => 11,
                   1 => 12,
                   2 => 13,
                   3 => 14,
                   4 => 15,
                ],
                5 =>  [
                   0 => 100,
                   1 => 101,
                   2 => 102,
                   3 => 200,
                   4 => 201,
                ],
            ],
        ],
        'arn' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'as' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'ast' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'ay' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'az' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'be' =>  [
            'header' => 'Plural-Forms: nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 21,
                   2 => 31,
                   3 => 41,
                   4 => 51,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 20,
                   4 => 22,
                ],
                2 =>  [
                   0 => 5,
                   1 => 6,
                   2 => 7,
                   3 => 8,
                   4 => 9,
                ],
            ],
        ],
        'bg' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'bn' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'bo' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'br' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'brx' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'bs' =>  [
            'header' => 'Plural-Forms: nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 21,
                   2 => 31,
                   3 => 41,
                   4 => 51,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 20,
                   4 => 22,
                ],
                2 =>  [
                   0 => 5,
                   1 => 6,
                   2 => 7,
                   3 => 8,
                   4 => 9,
                ],
            ],
        ],
        'ca' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'cgg' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'cs' =>  [
            'header' => 'Plural-Forms: nplurals=3; plural=(n==1) ? 0 : (n>=2 && n<=4) ? 1 : 2;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                ],
                2 =>  [
                   0 => 5,
                   1 => 6,
                   2 => 7,
                   3 => 8,
                   4 => 9,
                ],
            ],
        ],
        'csb' =>  [
            'header' => 'Plural-Forms: nplurals=3; plural=(n==1) ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 20,
                   4 => 21,
                ],
                2 =>  [
                   0 => 5,
                   1 => 6,
                   2 => 7,
                   3 => 8,
                   4 => 9,
                ],
            ],
        ],
        'cy' =>  [
            'header' => 'Plural-Forms: nplurals=4; plural=(n==1) ? 0 : (n==2) ? 1 : (n != 8 && n != 11) ? 2 : 3;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                ],
                2 =>  [
                   0 => 3,
                   1 => 4,
                   2 => 5,
                   3 => 6,
                   4 => 7,
                ],
                3 =>  [
                   0 => 8,
                   1 => 11,
                ],
            ],
        ],
        'da' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'de' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'doi' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'dz' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'el' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'en' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'eo' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'es' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'es_AR' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'et' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'eu' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'fa' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'ff' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'fi' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'fil' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'fo' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'fr' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'fur' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'fy' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'ga' =>  [
            'header' => 'Plural-Forms: nplurals=5; plural=n==1 ? 0 : n==2 ? 1 : (n>2 && n<7) ? 2 :(n>6 && n<11) ? 3 : 4;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                ],
                2 =>  [
                   0 => 3,
                   1 => 4,
                   2 => 5,
                   3 => 6,
                ],
                3 =>  [
                   0 => 7,
                   1 => 8,
                   2 => 9,
                   3 => 10,
                ],
                4 =>  [
                   0 => 11,
                   1 => 12,
                   2 => 13,
                   3 => 14,
                   4 => 15,
                ],
            ],
        ],
        'gd' =>  [
            'header' => 'Plural-Forms: nplurals=4; plural=(n==1 || n==11) ? 0 : (n==2 || n==12) ? 1 : (n > 2 && n < 20) ? 2 : 3;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 11,
                ],
                1 =>  [
                   0 => 2,
                   1 => 12,
                ],
                2 =>  [
                   0 => 3,
                   1 => 4,
                   2 => 5,
                   3 => 6,
                   4 => 7,
                ],
                3 =>  [
                   0 => 20,
                   1 => 21,
                   2 => 22,
                   3 => 23,
                   4 => 24,
                ],
            ],
        ],
        'gl' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'gu' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'gun' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'ha' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'he' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'hi' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'hne' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'hr' =>  [
            'header' => 'Plural-Forms: nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 21,
                   2 => 31,
                   3 => 41,
                   4 => 51,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 20,
                   4 => 22,
                ],
                2 =>  [
                   0 => 5,
                   1 => 6,
                   2 => 7,
                   3 => 8,
                   4 => 9,
                ],
            ],
        ],
        'hu' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'hy' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'ia' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'id' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'is' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n%10!=1 || n%100==11);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 21,
                   2 => 31,
                   3 => 41,
                   4 => 51,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'it' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'ja' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'jbo' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'jv' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 0);\\n',
            'forms' =>  [
                1 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'ka' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'kk' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'kl' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'km' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'kn' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'ko' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'ku' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'kw' =>  [
            'header' => 'Plural-Forms: nplurals=4; plural=(n==1) ? 0 : (n==2) ? 1 : (n == 3) ? 2 : 3;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                ],
                2 =>  [
                   0 => 3,
                ],
                3 =>  [
                   0 => 4,
                   1 => 5,
                   2 => 6,
                   3 => 7,
                   4 => 8,
                ],
            ],
        ],
        'ky' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'lb' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'ln' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'lo' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'lt' =>  [
            'header' => 'Plural-Forms: nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && (n%100<10 || n%100>=20) ? 1 : 2);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 21,
                   2 => 31,
                   3 => 41,
                   4 => 51,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
                2 =>  [
                   0 => 10,
                   1 => 11,
                   2 => 12,
                   3 => 13,
                   4 => 14,
                ],
            ],
        ],
        'lv' =>  [
            'header' => 'Plural-Forms: nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n != 0 ? 1 : 2);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 21,
                   2 => 31,
                   3 => 41,
                   4 => 51,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'mai' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'me' =>  [
            'header' => 'Plural-Forms: nplurals=3; plural=n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 21,
                   2 => 31,
                   3 => 41,
                   4 => 51,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 20,
                   4 => 22,
                ],
                2 =>  [
                   0 => 5,
                   1 => 6,
                   2 => 7,
                   3 => 8,
                   4 => 9,
                ],
            ],
        ],
        'mfe' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'mg' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'mi' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'ml' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'mn' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'mni' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'mnk' =>  [
            'header' => 'Plural-Forms: nplurals=3; plural=(n==0 ? 0 : n==1 ? 1 : 2);\\n',
            'forms' =>  [
                1 =>  [
                   0 => 1,
                ],
                2 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'mr' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'ms' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'mt' =>  [
            'header' => 'Plural-Forms: nplurals=4; plural=(n==1 ? 0 : n==0 || ( n%100>1 && n%100<11) ? 1 : (n%100>10 && n%100<20 ) ? 2 : 3);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
                2 =>  [
                   0 => 11,
                   1 => 12,
                   2 => 13,
                   3 => 14,
                   4 => 15,
                ],
                3 =>  [
                   0 => 20,
                   1 => 21,
                   2 => 22,
                   3 => 23,
                   4 => 24,
                ],
            ],
        ],
        'my' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'nah' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'nap' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'nb' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'ne' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'nl' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'nn' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'no' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'nso' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'oc' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'or' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'pa' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'pap' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'pl' =>  [
            'header' => 'Plural-Forms: nplurals=3; plural=(n==1 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 20,
                   4 => 21,
                ],
                2 =>  [
                   0 => 5,
                   1 => 6,
                   2 => 7,
                   3 => 8,
                   4 => 9,
                ],
            ],
        ],
        'pms' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'ps' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'pt' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'pt_BR' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'rm' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'ro' =>  [
            'header' => 'Plural-Forms: nplurals=3; plural=(n==1 ? 0 : (n==0 || (n%100 > 0 && n%100 < 20)) ? 1 : 2);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
                2 =>  [
                   0 => 20,
                   1 => 21,
                   2 => 22,
                   3 => 23,
                   4 => 24,
                ],
            ],
        ],
        'ru' =>  [
            'header' => 'Plural-Forms: nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 21,
                   2 => 31,
                   3 => 41,
                   4 => 51,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 20,
                   4 => 22,
                ],
                2 =>  [
                   0 => 5,
                   1 => 6,
                   2 => 7,
                   3 => 8,
                   4 => 9,
                ],
            ],
        ],
        'rw' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'sah' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'sat' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'sco' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'sd' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'se' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'si' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'sk' =>  [
            'header' => 'Plural-Forms: nplurals=3; plural=(n==1) ? 0 : (n>=2 && n<=4) ? 1 : 2;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                ],
                2 =>  [
                   0 => 5,
                   1 => 6,
                   2 => 7,
                   3 => 8,
                   4 => 9,
                ],
            ],
        ],
        'sl' =>  [
            'header' => 'Plural-Forms: nplurals=4; plural=(n%100==1 ? 0 : n%100==2 ? 1 : n%100==3 || n%100==4 ? 2 : 3);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 101,
                   2 => 201,
                   3 => 301,
                   4 => 401,
                ],
                1 =>  [
                   0 => 2,
                   1 => 102,
                   2 => 202,
                   3 => 302,
                   4 => 402,
                ],
                2 =>  [
                   0 => 3,
                   1 => 4,
                   2 => 103,
                   3 => 104,
                   4 => 203,
                ],
                3 =>  [
                   0 => 5,
                   1 => 6,
                   2 => 7,
                   3 => 8,
                   4 => 9,
                ],
            ],
        ],
        'so' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'son' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'sq' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'sr' =>  [
            'header' => 'Plural-Forms: nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 21,
                   2 => 31,
                   3 => 41,
                   4 => 51,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 20,
                   4 => 22,
                ],
                2 =>  [
                   0 => 5,
                   1 => 6,
                   2 => 7,
                   3 => 8,
                   4 => 9,
                ],
            ],
        ],
        'su' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'sv' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'sw' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'ta' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'te' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'tg' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'th' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'ti' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'tk' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'tr' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'tt' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'ug' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'uk' =>  [
            'header' => 'Plural-Forms: nplurals=3; plural=(n%10==1 && n%100!=11 ? 0 : n%10>=2 && n%10<=4 && (n%100<10 || n%100>=20) ? 1 : 2);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 21,
                   2 => 31,
                   3 => 41,
                   4 => 51,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 20,
                   4 => 22,
                ],
                2 =>  [
                   0 => 5,
                   1 => 6,
                   2 => 7,
                   3 => 8,
                   4 => 9,
                ],
            ],
        ],
        'ur' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'uz' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'vi' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'wa' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'wo' =>  [
            'header' => 'Plural-Forms: nplurals=1; plural=0;\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                   1 => 2,
                   2 => 3,
                   3 => 4,
                   4 => 5,
                ],
            ],
        ],
        'yo' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n != 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
        'zh' =>  [
            'header' => 'Plural-Forms: nplurals=2; plural=(n > 1);\\n',
            'forms' =>  [
                0 =>  [
                   0 => 1,
                ],
                1 =>  [
                   0 => 2,
                   1 => 3,
                   2 => 4,
                   3 => 5,
                   4 => 6,
                ],
            ],
        ],
    ];

    /**
     * $plurals array generator. Keeping it just in case.
     *
     * @return  void, writes to file
     *
     * @author Borut Hollan <borut.hollan@easistent.com>
     *
     * @version 1.0
     */
    public function build() {
        $new_array = [];
        foreach ($this->plurals_bckp as $lang => $plural) {
            $forms = [];

            $condition = str_replace("n", '$ii', $plural['plural']);
            $condition = str_replace(['(', ')'], '', $condition);
            $condition = explode(':', $condition);

            $condition_arr = array_reverse($condition);

            $condition = "";
            foreach ($condition_arr as $cond) {
                $condition = ": (" . $cond . $condition . ")";
            }
            $condition = substr($condition, 1);

            for ($ii = 1; $ii < 1000; $ii++) {
                $index = (int) eval("return $condition;");
                if (!isset($forms[$index]) || count($forms[$index]) < 5) {
                    $forms[$index][] = $ii;
                }
            }

            $new_array[$lang] = [
                'header' => $plural['header'],
                'forms' => $forms,
            ];
        }

        file_put_contents("new_array.php", '<?php $plurals = ' . var_export($new_array, true) . ';');
    }

    /**
     * Get language plurals for given locale
     *
     * @param   String $locale
     *
     * @return  array
     *
     * @author Borut Hollan <borut.hollan@easistent.com>
     *
     * @version 1.0
     */
    public function getForLocale($locale)
    {
        $language = substr($locale, 0, 2);

        return array_get($this->plurals, $language, []);
    }
}
