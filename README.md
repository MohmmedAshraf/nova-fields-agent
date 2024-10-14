# Laravel Nova Fields Agent
[![GitHub license](https://img.shields.io/github/license/MohmmedAshraf/nova-fields-agent.svg)](https://github.com/MohmmedAshraf/nova-fields-agent/blob/master/LICENSE.md)
[![GitHub issues](https://img.shields.io/github/issues/MohmmedAshraf/nova-fields-agent.svg)](https://github.com/MohmmedAshraf/nova-fields-agent/issues)
[![Total Downloads](https://poser.pugx.org/outhebox/nova-fields-agent/downloads)](https://packagist.org/packages/outhebox/nova-fields-agent)




## Description
This field give the ability to hide fields from your resources table on mobile screens for a better responsive concept.

## Support

[<img src="https://outhebox-github-ads.s3.us-east-1.amazonaws.com/nova-fields-agent.jpg)?t=1" width="419px" />](https://outhebox.dev/github-ad-click/nova-fields-agent).

Thank you for considering supporting the development of this package! If you'd like to contribute, you can buy me a coffee or sponsor me to help keep me motivated to continue improving this package. You can also support the project by starring ⭐ the repository.

To buy me a coffee, click the button below:

<a href="https://www.buymeacoffee.com/outhebox" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/default-orange.png" alt="Buy Me A Coffee" style="height: 51px !important;width: 217px !important;" ></a>

## Screenshots
![Screenshot](screenshot.gif)

## Installation
This package can be installed through Composer.
```bash
composer require outhebox/nova-fields-agent
```

## Example Usage
Note: All Fields Supported "Text Field only for example".

```php
// Important !!!
use Outhebox\NovaFieldsAgent\HasNovaFieldsAgent;

class Example extends Resource
{
    use HasNovaFieldsAgent; // Important !!!

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $requestµµ
     * @return array
     */
    public function fields(Request $request)
    {
        Text::make('ExampleField')
            ->hideFromDetailOnMobile() // Hide the field from details page on Mobile
            ->hideFromDetailOnTablet() // Hide the field from details page on Tablet
            ->HideFromIndexOnMobile() // Hide the field from index on Mobile
            ->HideFromIndexOnTablet() // Hide the field from index on Tablet
            ->sortable(),
    }
}
```

## License
Laravel Nova Fields Agent is licensed under [The MIT License (MIT)](LICENSE.md) .

## Donate
If you like this package, you can show your appreciation 💜 by [donating any amount via Patreon](https://www.patreon.com/m_ashraf) to support ongoing development.
