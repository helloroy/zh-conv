ZhConv
============
Traditional Chinese and Simplified Chinese Conversion base on wikimedia zhconv table

## Installation

### Via composer

Add the package to your `composer.json` file:


    {
      "require": {
        "dreamsdrive/zh-conv": "*"
      }
    }

Run `composer update`.

## Usage

The following example describes basic usage.

    <?php

    require_once('vendor/autoload.php');
    use DreamsDrive\ZhConv;

    echo '<pre>';
    echo ZhConv::get('HK','CN','「你們國家也有黑人嗎？」 布殊 ——2002年，巴西總統訪問美國。');
    echo ZhConv::get('TW','CN','「你們國家也有黑人嗎？」 布希 ——2002年，巴西總統訪問美國。');
    echo ZhConv::get('CN','HK','“你们国家也有黑人吗？” 布什 ——2002年，巴西总统访问美国。');
    echo ZhConv::get('CN','TW','“你们国家也有黑人吗？” 布什 ——2002年，巴西总统访问美国。');
    echo '</pre>';

    ?>