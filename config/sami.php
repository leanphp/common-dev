<?php
/**
 * This file is modified version of a filed  included in `examples/` directory
 * of `FriendsOfPHP/Sami`.
 * Source: https://github.com/FriendsOfPHP/Sami/blob/master/examples/sf2_with_gitlab.php
 * Homepage: https://github.com/FriendsOfPHP/Sami
 * Copyright: Contributors of Sami project.
 * LICENSE;
 */
use Sami\Sami;
use Sami\RemoteRepository\GitLabRemoteRepository;
use Sami\RemoteRepository\GitHubRemoteRepository;
use Sami\Version\GitVersionCollection;
use Symfony\Component\Finder\Finder;
$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->exclude('Resources')
    ->exclude('Tests')
    ->exclude('tests')
    ->in($dir = 'src')
;

// generate api for different versions
$versions = GitVersionCollection::create($dir)
    ->addFromTags('v2.0.*')
    ->add('2.0', '2.0 branch')
    ->add('master', 'master branch')
;

// use symfony theme
return new Sami($iterator, array(
    'theme' => 'symfony',
    'versions' => $versions,
    'title' => 'ProjectName API',
    'build_dir' => __DIR__.'/../build/docs/%version%',
    'cache_dir' => __DIR__.'/../build/cache/docs/%version%',
	// GitHub
    'remote_repository' => new GitHubRemoteRepository('leanphp/common-dev', dirname($dir)),
	// GitLab
    //'remote_repository' => new GitLabRemoteRepository('organization/repository', dirname($dir), 'https://gitlab.company.com/'),
    'default_opened_level' => 2,
));
