<?php

namespace Elasticquent;

trait ElasticquentClientTrait
{
    use ElasticquentConfigTrait;

    /**
     * Get ElasticSearch Client
     *
     * @return \Elasticsearch6\Client
     */
    public function getElasticSearchClient()
    {
        $config = $this->getElasticConfig();

        // elasticsearch v2.0 using builder
        if (class_exists('\Elasticsearch6\ClientBuilder')) {
            return \Elasticsearch6\ClientBuilder::fromConfig($config);
        }

        // elasticsearch v1
        return new \Elasticsearch6\Client($config);
    }

}
