<?php

require_once realpath( dirname( __FILE__ ) . '/../../autoload.php' );

/**
 * Extension to the regular GoogleGAL_Model that automatically
 * exposes the items array for iteration, so you can just
 * iterate over the object rather than a reference inside.
 */
class GoogleGAL_Collection extends GoogleGAL_Model implements Iterator, Countable
{
  protected $collection_key = 'items';

  #[\ReturnTypeWillChange]
  public function rewind()
  {
    if (isset($this->modelData[$this->collection_key])
        && is_array($this->modelData[$this->collection_key])) {
      reset($this->modelData[$this->collection_key]);
    }
  }

  #[\ReturnTypeWillChange]
  public function current()
  {
    $this->coerceType($this->key());
    if (is_array($this->modelData[$this->collection_key])) {
      return current($this->modelData[$this->collection_key]);
    }
  }

  #[\ReturnTypeWillChange]
  public function key()
  {
    if (isset($this->modelData[$this->collection_key])
        && is_array($this->modelData[$this->collection_key])) {
      return key($this->modelData[$this->collection_key]);
    }
  }

  #[\ReturnTypeWillChange]
  public function next()
  {
    return next($this->modelData[$this->collection_key]);
  }

  #[\ReturnTypeWillChange]
  public function valid()
  {
    $key = $this->key();
    return $key !== null && $key !== false;
  }

  #[\ReturnTypeWillChange]
  public function count()
  {
    if (!isset($this->modelData[$this->collection_key])) {
      return 0;
    }
    return count($this->modelData[$this->collection_key]);
  }

  #[\ReturnTypeWillChange]
  public function offsetExists($offset)
  {
    if (!is_numeric($offset)) {
      return parent::offsetExists($offset);
    }
    return isset($this->modelData[$this->collection_key][$offset]);
  }

  #[\ReturnTypeWillChange]
  public function offsetGet($offset)
  {
    if (!is_numeric($offset)) {
      return parent::offsetGet($offset);
    }
    $this->coerceType($offset);
    return $this->modelData[$this->collection_key][$offset];
  }

  #[\ReturnTypeWillChange]
  public function offsetSet($offset, $value)
  {
    if (!is_numeric($offset)) {
      return parent::offsetSet($offset, $value);
    }
    $this->modelData[$this->collection_key][$offset] = $value;
  }

  #[\ReturnTypeWillChange]
  public function offsetUnset($offset)
  {
    if (!is_numeric($offset)) {
      return parent::offsetUnset($offset);
    }
    unset($this->modelData[$this->collection_key][$offset]);
  }

  private function coerceType($offset)
  {
    $typeKey = $this->keyType($this->collection_key);
    if (isset($this->$typeKey) && !is_object($this->modelData[$this->collection_key][$offset])) {
      $type = $this->$typeKey;
      $this->modelData[$this->collection_key][$offset] =
          new $type($this->modelData[$this->collection_key][$offset]);
    }
  }
}
