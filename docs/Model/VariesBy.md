# # VariesBy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aspects_image_varies_by** | **string[]** | This container is used if the seller wants to include multiple images to demonstrate how variations within a multiple-variation listing differ. In this string field, the seller will specify the product aspect where the variations of the inventory item group vary, such as color. If Color is specified in this field, Color must also be one of the specifications.name values, and all available colors must appear in the corresponding specifications.values array. If the aspectsImageVariesBy container is used, links to images of each variation should be specified through the imageUrls container of the inventory item group, or the seller can choose to include those links to images in each inventory item record for the inventory items in the group. | [optional] 
**specifications** | [**\OpenAPI\Client\Model\Specification[]**](Specification.md) | This container consists of an array of one or more product aspects where each variation differs, and values for each of those product aspects. This container is not immediately required, but will be required before the first offer of the inventory item group is published. If a product aspect is specified in the aspectsImageVariesBy container, this product aspect (along with all variations of that product aspect) must be included in the specifications container. Before offers related to the inventory item group are published, the product aspects and values specified through the specifications container should be in synch with the name-value pairs specified through the product.aspects containers of the inventory items contained in the group. For example, if Color and Size are in this specifications container, each inventory item of the group should also have Color and Size as aspect names in their inventory item records. This container is always returned if one or more offers associated with the inventory item group have been published. For inventory item groups that have yet to have any published offers, this container is only returned if set. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


