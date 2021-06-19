<?xml version="1.0"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output doctype-public="-//W3C//DTD XHTML 1.1//EN" doctype-system="http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd" encoding="ISO-8859-2" method="html"/>
  <xsl:variable name="total_sum" select="0"/>
  <xsl:template match="/">
    
    <html>
      <head>
        <style type="text/css">
          /* <![CDATA[ */
          body {
            background-color: #cbb1d4;
          }

          img {
            width: 100%;
          }

          .top, .mid, .bot {
            position: relative;
          }

          .top__right, .top__left {
            position: absolute;
            justify-content: left;
            top: 15%;
            height: 50%;
            width: calc(32.5% - 10px);
          }

          .top__right {
            right: 10px;
          }

          .top__left{
            left: 10px;
          }

          .top__left > p, .top__right > p {
            display: flex;
            height: 33%;
            margin: 0px;
            overflow: hidden;
            align-items: flex-end;
          }

          .top__center__number {
            position: absolute;
            top: 32%;
            height: 23%;
            width: 16.5%;
            left: 35%;
          }

          .top__center__number > p {
            display: flex;
            height: 100%;
            margin: 0px;
            align-items: center;
            justify-content: center;
          }

          .top__center__city__and__date {
            position: absolute;
            top: 69%;
            height: 25%;
            width: 21%;
            left: 44%;
          }

          .top__center__city__and__date > p {
            display: flex;
            height: 50%;
            margin: 0px;
            overflow: hidden;
            align-items: flex-end;
          }

          

          .mid__data {
            display: grid;
            position: absolute;
            grid-template-columns: 4% 45.5% 5% 19.5% 13% 13%;
            grid-template-rows: repeat(7, 14.285%);
            width: 100%;            
            height: 74%;
            left: 0%;
            bottom: 1%;
          }

          .mid__data > p {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0px;
          }

          .bot__sum {
            display: flex;
            flex-direction: row;
            position: absolute;
            justify-content: left;
            width: 13%;
            height: 12%;
            top: 0%;
            right: 0%;
          }

          .mid__sums {
            display: flex;
            flex-direction: row;
          }

          .price__zl {
            width: 73%;
          }

          .price__gr {
            width: 27%;
          }

          .bot__sum > div > p, .mid__sums > div > p {
            display: flex;
            height: 100%;
            margin: 0px;
            align-items: center;
            justify-content: center;
          }
          /* ]]> */
        </style>
      </head>
      <body>
        <div class="top">

          <div class="top__image">
            <img src='top.jpg' />
          </div>

          <div class="top__left">
            <p><xsl:value-of select="Data/Seller/Person/Name" /></p>
            <p><xsl:value-of select="Data/Seller/Person/Surname" /></p>
            <p><xsl:value-of select="Data/Seller/Person/Company" /></p>
          </div>

          <div class="top__center">

            <div class="top__center__number">
              <p><xsl:value-of select="Data/Number" /></p>
            </div>

            <div class="top__center__city__and__date">
              <p><xsl:value-of select="Data/City" /></p>
              <p><xsl:value-of select="Data/Date" /></p>
            </div>

          </div>

          <div class="top__right">
            <p><xsl:value-of select="Data/Buyer/Person/Name" /></p>
            <p><xsl:value-of select="Data/Buyer/Person/Surname" /></p>
            <p><xsl:value-of select="Data/Buyer/Person/Company" /></p>
          </div>

        </div>
        
        
        <div class="mid">

          <div class="mid__image">
            <img src='mid.jpg' />
          </div>

          <div class="mid__data">
              
              <xsl:for-each select="Data/Goods/Good">
                <xsl:variable name="i" select="position()"/>

                <p><xsl:value-of select="$i" /></p>
                <p><xsl:value-of select="Name" /></p>
                <p><xsl:value-of select="Unit" /></p>
                <p><xsl:value-of select="Quantity" /></p>

                <div class="mid__sums">
                  <xsl:variable name="price_int" select="floor(Price)"/>

                  <div class="price__zl">
                    <p><xsl:value-of select="$price_int" /></p>
                  </div>
      
                  <div class="price__gr">
                    <p><xsl:value-of select="round((Price - $price_int)*100)" /></p>
                  </div>

                </div>

                <div class="mid__sums">
                  <xsl:variable name="qprice_int" select="floor(Quantity*Price)"/>

                  <div class="price__zl">
                    <p><xsl:value-of select="$qprice_int" /></p>
                  </div>
      
                  <div class="price__gr">
                    <p><xsl:value-of select="round((Quantity*Price - $qprice_int)*100)" /></p>
                  </div>
                </div>
              </xsl:for-each>
          </div>

        </div>

        
        <div class="bot">

          <div class="bot__image">
            <img src='bot.jpg' />
          </div>

          <div class="bot__sum">
            <xsl:variable name="total_sum">

              <xsl:call-template name="sum">
                <xsl:with-param name="good" select="Data/Goods/Good" />
              </xsl:call-template>

            </xsl:variable>
            <xsl:variable name="tprice_int" select="floor($total_sum)"/>
            
            <div class="price__zl">
              <p><xsl:value-of select="$tprice_int" /></p>
            </div>

            <div class="price__gr">
              <p><xsl:value-of select="round(($total_sum - $tprice_int)*100)" /></p>
            </div>

          </div>
        </div>
      </body>
 </html>

  </xsl:template>

  <xsl:template name="sum">
    <xsl:param name="good" />
    <xsl:param name="total_sum" select="0" />

      <xsl:choose>

        <xsl:when test="not($good)">
          <xsl:value-of select="$total_sum" />
        </xsl:when>

        <xsl:otherwise>

          <xsl:variable name="total_price" select="$good[1]/Price * $good[1]/Quantity" />
          <xsl:call-template name="sum">
              <xsl:with-param name="good" select="$good[position() > 1]" />
              <xsl:with-param name="total_sum" select="$total_sum + $total_price" />
          </xsl:call-template>

        </xsl:otherwise>

      </xsl:choose>
  </xsl:template>

</xsl:stylesheet>