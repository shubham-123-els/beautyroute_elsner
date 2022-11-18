# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

## [0.3.10] - 3 July 2022
### Fixed
- Don't display image timestamp if no image is there
- Allow for multiple img tags on a row
- Switch from complex regex to easier DOMDocument search
- Issue with integration tests and Monolog 2.7
- Add GitHub Actions composer cacheq

## [0.3.9] - 29 June 2022
### Fixed
- Normalize base URL as well
- Change html_entity_decode into escaper for PHPCS

## [0.3.8] - 29 June 2022
### Fixed
- Make sure to keep HTTPS URLs for media intact
- Convert static files into static URLs properly

## [0.3.7] - 29 June 2022
### Fixed
- Normalized URLs don't match anymore with media URL and static URL (WebP #122)

## [0.3.6] - 27 June 2022
### Fixed
- Handle URLs starting without protocol (//) in a better way (#34)

## [0.3.5] - 12 June 2022
### Fixed
- Strip query string from source image URL (@theuargb)

## [0.3.4] - 7 June 2022
### Fixed
- Make sure non-existing sources don't throw exceptions

## [0.3.3] - 2 June 2022
### Fixed
- Do not edit gallery JSON when module is disabled

## [0.3.2] - 21 May 2022
### Fixed
- Fix URL-to-file conversion for URL-decoded URLs
- Respect native lazy loading attribute #29 (@pointia)

## [0.3.1] - 19 May 2022
### Fixed
- Set sane defaults for all configuration values
- Check if extension is enabled for plugin #30 (@artbambou)

### Added
- Beautify console output

## [0.3.0] - 4 May 2022
### Fixed
- Same WebP image for example.jpg and example.jpeg
- Improve translating static file URLs into filenames
- Add event observer to make sure blocks with non-zero TTL are parsed when FPC is enabled
- Fix issues with Product Swatches

### Added
- Various unit tests
- Live testing for better testing
- Moved AJAX plugin for swatches from WebP extension to NextGenImages
- New config option for target directory
- New config option for adding an unique hash for target images
- Implement hash when creating target images

## [0.2.13] - 10 December 2021
### Fixed
- isNewerThan method is not reached when the converted image already exists (@peteracs)

## [0.2.12] - 10 November 2021
### Added
- Allow file driver interface to be overwritten

## [0.2.11] - 26 October 2021
### Fixed
- Make sure non-self-breaking sources don't break

## [0.2.10] - 17 August 2021
### Fixed
- Prevent file check from reading whole file (performance issue)

## [0.2.9] - 17 August 2021
### Fixed
- Fatal Error on swatches AJAX call

### Removed
- DummyConvertor with DI preference
- UrlReplacer used only in CorrectImagesInAjaxResponse

## [0.2.8] - 17 August 2021
### Fixed
- Wrap exceptions so they don't appear in frontend
- Prevent non-existing files from throwing NotFoundException

## [0.2.7] - 13 August 2021
### Fixed
- Be more helpful when non-existing image is used in convert command
- Make sure UrlConvertor throws error properly (@Quazz)

## [0.2.6] - 13 August 2021
### Fixed
- Exception was supplied `Phrase` instead of string

## [0.2.5] - 12 August 2021
### Fixed
- Remove debugging info

## [0.2.4] - 12 August 2021
### Fixed
- Make sure plugin ConvertAfterImageSave still respects original return value

### Added
- Additional debug options for CLI command
- Support for media URL different from base URL (like CDNs)

## [0.2.3] - 7 July 2021
### Fixed
- Add current store to all methods
- Make sure ConvertorListing works even though no convertor is available
- Hide all other fields if setting "Enabled" is set to 0
- Make sure plugins are off when module is configured to be disabled

## [0.2.2] - 29 June 2021
### Fixed
- Make sure CLI converts images with their absolute path
- Only convert image URLs matching the Magento base URL [@tdgroot]

## [0.2.1] - 9 March 2021
### Fixed
- Fix Dummy convertor to prevent compilation error

## [0.2.0] - 9 March 2021
### Added
- New option to try to convert on saving
- Add console command for converting images manually
- Add command to test for URIs quickly
- Update convertor to make second arg optional

## [0.1.1] - 15 February 2021
### Fixed
- Fix composer version
- Fix word "Logging" in config options

## [0.1.0] - 15 February 2021
### Added
- Enhance debugger with logging option
- Add logging with every exception

## [0.0.6] - 7 January 2021
### Fixed
- Reimplement `data-src` (PR 51 from the `Yireo_Webp2` module)

## [0.0.5] - 3 December 2020
### Fixed
- Add dummy convertor with DI preference
- Replace all WebP deps with NextGenImages deps

## [0.0.4] - 2 December 2020
### Fixed
- Re-add dep with WebP2 in controller

## [0.0.3] - 2 December 2020
### Fixed
- Remove deps with WebP2 module
- Add missing Browser class

## [0.0.2] - 30 November 2020
### Added
- Methods to added to ConvertorInterface

### Removed
- Remove duplicate DI.xml (and add docs for this)

## [0.0.1] - 30 November 2020
### Added
- Initial release together with Yireo WebP2
