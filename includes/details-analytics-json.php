<script>

    // This variable needs to be included in the head element before the GTM script tag

    dataLayer = [{
        'contentGroup1': 'TNA catalogue',
        'readerType': 'offsite', // Reflects the 'type' of reader are 'offsite', 'onsite_public', 'onsite_staff', 'subscription'
        'userType': '', // Private beta specific - the user ID for participants. Left blank in this example because format unknown.
        'pageType': 'TNA catalogue record detail', // Three options: 'TNA catalogue record detail', 'TNA catalogue digitised record detail', 'TNA catalogue [Department | Division | Sub-division | Series | Sub-series | Sub-sub-series | Piece | Item ]' - the last of these will have the relevant level
        'taxonomyTopic': 'Crime, courts and Justice; Family and identity', // Taxonomy topics for the page, delineated by semi-colons. Empty string if no value.
        'taxonomySubTopic': '', // Taxonomy sub-topics for the page, delineated by semi-colons. Empty string if no value.
        'taxonomyTerm': 'Litigation', // Taxonomy terms for the page, delineated by semi-colon. Empty string if no value.
        'timePeriod': 'Early modern (1485-1714)', // String representing time period as expressed in Explorer
        'entityType': 'People', // This represents the entity types defined for Insights. If available for the record include here.
        'catalogueRepository': 'The National Archives', // This is the 'Record now held at' field
        'catalogueLevel': 'Level in hierarchy: 4 - Piece', // Level and name of level within hierarchy
        'catalogueSeries': 'C 5', // Series for record (where applicable). Empty string where not applicable.
        'catalogueReference': 'C 5/139/35', // The full catalogue reference,
        'catalogueReferenceTitle': 'Short title: Frisby v Frisby. Plaintiffs: John Frisby, William Frisby, and Anthony...', // The full title
        'catalogueSeriesTitle': 'Court of Chancery: Six Clerks Office: Pleadings before 1714, Bridges' // Title for series for record (where applicable). Empty string where not applicable.
        'catalogueDataSource': 'TNA catalogue', // The originating database source (i.e. DRI, NRA, A2A, TNA catalogue)
        'availabilityConditionCategory': 'Not viewable online', // Where applicable, one of three options: 'Not viewable online', 'Viewable online' , 'Available from 3rd party', 'Viewable online and via 3rd party'. Empty string where not applicable (HO has list of associations between AvailabilityConditions and AvailabilityConditionCategory)
        'availabilityCondition': 'Order original' // Name of the relevant delivery option (where applicable). Empty string if not applicable.
    }]
</script>
