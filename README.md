<h1>Canonical URL for CMS Page - Magento 2 Website</h2>

With the default, Magento set up developer enable to add canonical URL on Product and category page directly using admin panel. Unfortunately, it is not so in the case of CMS pages.  

Therefore, M-Connect Media have developed a simple code function to add canonical URL on CMS pages as well. Thus, we can eliminate duplicate content pages issues throughout the Magento 2 website with simple tweaks.

Using the same, it automatically adds canonical URL, as a display in the head. Moreover, it provides two options in bonus, and those are as following:

<ol>
<li>It lets you keep trailing slash at the end of the URL</li>
<li>It lets you remove trailing slash at the end of the URL</li>
</ol>

<h2>Setup</h2>

Download Mconnectmedia_CmsPageCanonicalUrl.Zip unzip it <br>
Upload in magento root  and run below Command <br>

Run Command List

php bin/magento module:enable Mconnectmedia_CmsPageCanonicalUrl <br>
php bin/magento setup:upgrade <br>
php bin/magento cache:flush <br>
php bin/magento cache:clean <br>
rm -rf var/di var/generation var/cache <br><br>

<h2>Back-end Options</h2>

You can access its setting through Admin panel. Easy to use and manage! 

<h3>Admin Setting</h3>
<img src="http://mconnectmedia.com/pub/media/github/admin_canonical.jpg" />

<h3><center>Canonical URL without Trailing Slash</center></h3><br>
<img src="https://www.mconnectmedia.com/pub/media/github/canonical.jpg" />

<h3><center>Canonical URL with Trailing Slash</center></h3><br>
<img src="https://www.mconnectmedia.com/pub/media/github/canonical_trailing_slash.jpg" />
