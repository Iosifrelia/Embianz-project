<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Billing
 *
 * @property int $id
 * @property string|null $firstname
 * @property string|null $lastname
 * @property string|null $street
 * @property string $streetopt
 * @property int $country_id
 * @property string $phone
 * @property string $email
 * @property string|null $createdby
 * @property string|null $lastmodifiedby
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Billing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Billing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Billing query()
 * @method static \Illuminate\Database\Eloquent\Builder|Billing whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Billing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Billing whereCreatedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Billing whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Billing whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Billing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Billing whereLastmodifiedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Billing whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Billing wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Billing whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Billing whereStreetopt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Billing whereUpdatedAt($value)
 */
	class Billing extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CartItem
 *
 * @property int $id
 * @property int $cart_id
 * @property int $product_id
 * @property int $price_id
 * @property string|null $quantity
 * @property string|null $createdby
 * @property string|null $lastmodifiedby
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereCartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereCreatedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereLastmodifiedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem wherePriceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CartItem whereUpdatedAt($value)
 */
	class CartItem extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Carts
 *
 * @property int $id
 * @property string|null $subtotal
 * @property string|null $total_amount
 * @property string|null $cart_status
 * @property string|null $createdby
 * @property string|null $lastmodifiedby
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Carts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Carts query()
 * @method static \Illuminate\Database\Eloquent\Builder|Carts whereCartStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carts whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carts whereCreatedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carts whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carts whereLastmodifiedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carts whereSubtotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carts whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Carts whereUpdatedAt($value)
 */
	class Carts extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Categories
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $parrent
 * @property string|null $long_description
 * @property string|null $short_description
 * @property string|null $sequence
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string|null $createdby
 * @property string|null $lastmodifiedby
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Categories newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categories newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Categories query()
 * @method static \Illuminate\Database\Eloquent\Builder|Categories whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categories whereCreatedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categories whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categories whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categories whereLastmodifiedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categories whereLongDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categories whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categories whereParrent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categories whereSequence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categories whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categories whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Categories whereUpdatedAt($value)
 */
	class Categories extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CategoryTranslation
 *
 * @property int $id
 * @property int $category_id
 * @property int $language_id
 * @property string|null $translation
 * @property string|null $createdby
 * @property string|null $lastmodifiedby
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation whereCreatedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation whereLastmodifiedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation whereTranslation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryTranslation whereUpdatedAt($value)
 */
	class CategoryTranslation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Country
 *
 * @property int $id
 * @property string|null $tara
 * @property string|null $createdby
 * @property string|null $lastmodifiedby
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereCreatedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereLastmodifiedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereTara($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Country whereUpdatedAt($value)
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ImageCategory
 *
 * @property int $id
 * @property int $img_category_id
 * @property string|null $img_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ImageCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageCategory whereImgCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageCategory whereImgName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageCategory whereUpdatedAt($value)
 */
	class ImageCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ImageProduct
 *
 * @property int $id
 * @property int $img_product_id
 * @property string|null $img_search_name
 * @property string|null $img_main_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ImageProduct newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageProduct newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageProduct query()
 * @method static \Illuminate\Database\Eloquent\Builder|ImageProduct whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageProduct whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageProduct whereImgMainName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageProduct whereImgProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageProduct whereImgSearchName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ImageProduct whereUpdatedAt($value)
 */
	class ImageProduct extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Labels
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $content
 * @property string|null $createdby
 * @property string|null $lastmodifiedby
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Labels newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Labels newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Labels query()
 * @method static \Illuminate\Database\Eloquent\Builder|Labels whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Labels whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Labels whereCreatedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Labels whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Labels whereLastmodifiedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Labels whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Labels whereUpdatedAt($value)
 */
	class Labels extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\LabelsTranslation
 *
 * @property int $id
 * @property int $label_id
 * @property int $language_id
 * @property string|null $translation
 * @property string|null $createdby
 * @property string|null $lastmodifiedby
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|LabelsTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LabelsTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LabelsTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|LabelsTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LabelsTranslation whereCreatedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LabelsTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LabelsTranslation whereLabelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LabelsTranslation whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LabelsTranslation whereLastmodifiedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LabelsTranslation whereTranslation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LabelsTranslation whereUpdatedAt($value)
 */
	class LabelsTranslation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Languages
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $createdby
 * @property string|null $lastmodifiedby
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Languages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Languages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Languages query()
 * @method static \Illuminate\Database\Eloquent\Builder|Languages whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Languages whereCreatedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Languages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Languages whereLastmodifiedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Languages whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Languages whereUpdatedAt($value)
 */
	class Languages extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PricebookEntries
 *
 * @property int $id
 * @property int $pricebook_id
 * @property int $product_id
 * @property string|null $createdby
 * @property string|null $lastmodifiedby
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PricebookEntries newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PricebookEntries newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PricebookEntries query()
 * @method static \Illuminate\Database\Eloquent\Builder|PricebookEntries whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PricebookEntries whereCreatedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PricebookEntries whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PricebookEntries whereLastmodifiedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PricebookEntries wherePricebookId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PricebookEntries whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PricebookEntries whereUpdatedAt($value)
 */
	class PricebookEntries extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Pricebooks
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $createdby
 * @property string|null $lastmodifiedby
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Pricebooks newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pricebooks newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Pricebooks query()
 * @method static \Illuminate\Database\Eloquent\Builder|Pricebooks whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pricebooks whereCreatedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pricebooks whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pricebooks whereLastmodifiedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pricebooks whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Pricebooks whereUpdatedAt($value)
 */
	class Pricebooks extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductCategories
 *
 * @property int $id
 * @property int $category_id
 * @property int $product_id
 * @property string|null $createdby
 * @property string|null $lastmodifiedby
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategories newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategories newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategories query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategories whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategories whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategories whereCreatedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategories whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategories whereLastmodifiedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategories whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductCategories whereUpdatedAt($value)
 */
	class ProductCategories extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Products
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $short_description
 * @property string|null $long_description
 * @property string|null $quantity
 * @property string|null $product_status
 * @property string|null $start_date
 * @property string|null $end_date
 * @property string|null $createdby
 * @property string|null $lastmodifiedby
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Products newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Products newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Products query()
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereCreatedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereLastmodifiedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereLongDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereProductStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Products whereUpdatedAt($value)
 */
	class Products extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductsSpecs
 *
 * @property int $id
 * @property int $product_id
 * @property int $spec_id
 * @property string|null $createdby
 * @property string|null $lastmodifiedby
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsSpecs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsSpecs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsSpecs query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsSpecs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsSpecs whereCreatedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsSpecs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsSpecs whereLastmodifiedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsSpecs whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsSpecs whereSpecId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsSpecs whereUpdatedAt($value)
 */
	class ProductsSpecs extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ProductsTranslations
 *
 * @property int $id
 * @property int $product_id
 * @property int $language_id
 * @property string|null $name_translation
 * @property string|null $short_description_translation
 * @property string|null $long_description_translation
 * @property string|null $product_status_translation
 * @property string|null $createdby
 * @property string|null $lastmodifiedby
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsTranslations newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsTranslations newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsTranslations query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsTranslations whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsTranslations whereCreatedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsTranslations whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsTranslations whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsTranslations whereLastmodifiedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsTranslations whereLongDescriptionTranslation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsTranslations whereNameTranslation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsTranslations whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsTranslations whereProductStatusTranslation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsTranslations whereShortDescriptionTranslation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ProductsTranslations whereUpdatedAt($value)
 */
	class ProductsTranslations extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Shipping
 *
 * @property int $id
 * @property string|null $firstname
 * @property string|null $lastname
 * @property string|null $street
 * @property string $streetopt
 * @property int $country_id
 * @property string $phone
 * @property string $email
 * @property string|null $createdby
 * @property string|null $lastmodifiedby
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping query()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereCreatedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereLastmodifiedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereStreetopt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereUpdatedAt($value)
 */
	class Shipping extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Specs
 *
 * @property int $id
 * @property string|null $name_specification
 * @property string|null $createdby
 * @property string|null $lastmodifiedby
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Specs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Specs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Specs query()
 * @method static \Illuminate\Database\Eloquent\Builder|Specs whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specs whereCreatedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specs whereLastmodifiedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specs whereNameSpecification($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Specs whereUpdatedAt($value)
 */
	class Specs extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SpecsTranslation
 *
 * @property int $id
 * @property int $spec_id
 * @property int $language_id
 * @property string|null $translation
 * @property string|null $createdby
 * @property string|null $lastmodifiedby
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SpecsTranslation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SpecsTranslation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SpecsTranslation query()
 * @method static \Illuminate\Database\Eloquent\Builder|SpecsTranslation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecsTranslation whereCreatedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecsTranslation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecsTranslation whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecsTranslation whereLastmodifiedby($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecsTranslation whereSpecId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecsTranslation whereTranslation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SpecsTranslation whereUpdatedAt($value)
 */
	class SpecsTranslation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $usertype
 * @property string|null $phone
 * @property string|null $adress
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $profile_photo_url
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAdress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsertype($value)
 */
	class User extends \Eloquent {}
}

