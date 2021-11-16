<?php declare(strict_types=1);

namespace Dive\Fez\Nova;

use Dive\Fez\Factories\FormatterFactory;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use Laravel\Nova\Fields\Field;

class Fez extends Field
{
    public $component = 'fez';

    public $showOnCreation = false;

    public $showOnDetail = true;

    public $showOnIndex = false;

    public $showOnUpdate = false;

    public $onlyOnDetail = true;

    public function resolve($resource, $attribute = null)
    {
        $value = $this->getData();
        $value = $this->mergeDataWithResource($resource, $value);
        $value = $this->appendUrlForDisplayPurposes($value);
        $value = $this->formatTitle($value);

        $this->value = $value;
    }

    private function appendUrlForDisplayPurposes(array $data): array
    {
        $data['url'] = [
            'host' => Request::getHost(),
            'scheme' => Request::getScheme(),
        ];

        return $data;
    }

    private function formatTitle(array $data): array
    {
        $data['title'] = FormatterFactory::make()
            ->create(Config::get('fez.title'))
            ->format($data['title']);

        return $data;
    }

    private function getData(): array
    {
        $data = Config::get('fez.defaults.general') + ['title' => ''];

        if (is_array($data['description'])) {
            $data['description'] = $data['description'][App::getLocale()];
        }

        return $data;
    }

    private function mergeDataWithResource($resource, array $data): array
    {
        if (! $resource->exists) {
            return $data;
        }

        $meta = $resource->gatherMetaData();

        foreach (array_keys($data) as $field) {
            if (is_string($value = $meta->{$field}())) {
                $data[$field] = $value;
            }
        }

        return $data;
    }
}
